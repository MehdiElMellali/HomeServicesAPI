<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class CustomerServiceController extends ApiController
{ 
    
    public function __construct(){
    parent::__construct();
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customer)
    {
        $services = $customer->orders()->with('service')
        ->get()
        ->pluck('service');
        return $this->showAll($services);
    }

   
}
