<?php

namespace App\Http\Controllers\Service;

<<<<<<< HEAD
use App\Customer;
use App\Http\Controllers\ApiController;
use App\Order;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
=======
use App\Order;
use App\Service;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transformers\OrderTransformer;
use App\Http\Controllers\ApiController;
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b

class ServiceCustomerOrderController extends ApiController
{

<<<<<<< HEAD
=======
    public function __construct(){
        parent::__construct();
        $this->middleware('transform.input:'.OrderTransformer::class)->only(['store']);
    }
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Service $service,Customer $customer)
    {
        if (!$customer->isVerified()) {
            return $this->errorResponse('the Customer is not verified ',409);
        }

        return DB::transaction(function() use($request,$service,$customer)
        {
            $order = Order::create([
                'customer_id'=>$customer->id,
                'service_id'=>$service->id,

            ]);
            return $this->showOne($order,409);
        });

    }
}
