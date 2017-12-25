<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\ApiController;
use App\Service;
use Illuminate\Http\Request;

class ServiceOrderController extends ApiController
{


    public function __construct(){
        //parent::__construct();
        $this->middleware('client.credentails')->only(['index']);
       // $this->middleware('transform.input:'.ServiceTransformer::class)->only(['store','update']);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Service $service)
    {
        $orders = $service->orders;
        return $this->showAll($orders);
    }

 
}
