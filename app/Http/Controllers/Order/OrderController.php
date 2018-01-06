<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\ApiController;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends ApiController
{

    public function __construct(){
        parent::__construct();
        $this->middleware('scope:read-general')->only(['show']);
        $this->middleware('can:view,order')->only(['show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->allowedAdminAction();
               $service = Order::all();
        return $this->showAll($service);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return $this->showOne($order);
    }

}
