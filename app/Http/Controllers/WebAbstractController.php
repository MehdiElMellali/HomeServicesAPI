<?php

namespace App\Http\Controllers;


use App\Traits\MainProcessTrait;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class WebAbstractController extends  Controller{

    use   UploadTrait ,MainProcessTrait;

    public $model;
    protected  $log;
    protected $related ;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->log = new Log();
    }

}