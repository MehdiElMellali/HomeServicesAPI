<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class CustomerOrderController extends ApiController
{

    public function __construct(){
        parent::__construct();
        $this->middleware('scope:read-general')->only(['index']);
        $this->middleware('can:view,customer')->only(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index(Customer $customer)
        {
            $orders = $customer->orders;
            return $this->showAll($orders);
        }
}
