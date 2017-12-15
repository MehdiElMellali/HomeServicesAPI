<?php

namespace App\Exceptions;
use Exception;
use App\Traits\ApiResponser;
use Barryvdh\Cors\CorsService;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof ValidationException)
        {
            return $this->convertValidationExceptionToResponse($exception,$request); 
        }
        if($exception instanceof ModelNotFoundException)
        {
            $nameModel = strtolower(class_basename(
                $exception->getModel()));
            return $this->errorResponse("Does not existes any {$nameModel}  with the specified identificator",404); 
        }
         if($exception instanceof ValidationException)
        {
            return $this->unauthenticated($request,$exception); 
        }
          if($exception instanceof AuthorizationException)
        {
            return $this->errorResponse($exception->getMessage(),403); 
        }
         if($exception instanceof NotFoundHttpException)
        {
            return $this->errorResponse('The specified URL cannot be found',404); 
        }
        if($exception instanceof MethodNotAllowedHttpException)
        {
            return $this->errorResponse('The specified Method for the request is invalid',405); 
        }
        if($exception instanceof HttpException)
        {
            return $this->errorResponse($exception->getMessage(),$exception->getStatusCode()); 
        }
         if($exception instanceof QueryException)
        {
            $errorCode = $exception->errorInfo[1];
            if($errorCode == 1451)
            {
                return $this->errorResponse('Connot remove this resource permently.is is relatied with any other resource',409); 
            }
            
        }
        if(config('app.debug'))
        {
        return parent::render($request, $exception);
        }
        return $this->errorResponse('Unexpected exception, Try later',500); 
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $this->errorResponse('Unauthenticated',401);
    }




    /**
     * Create a response object from the given validation exception.
     *
     * @param  \Illuminate\Validation\ValidationException  $e
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
        $errors = $e->validator->errors()->getMessages();

        return $this->errorResponse($errors,422);
    }

}
