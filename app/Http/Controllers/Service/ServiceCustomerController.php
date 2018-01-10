<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\ApiController;
use App\Service;
use Illuminate\Http\Request;

class ServiceCustomerController extends ApiController
{

    public function __construct(){
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Service $service)
    {
        $customer = $service->orders()->with('customer')
        ->get()
        ->pluck('customer')
        ->unique('id')
        ->values();
          return $this->showAll($customer );
    }

   
}
