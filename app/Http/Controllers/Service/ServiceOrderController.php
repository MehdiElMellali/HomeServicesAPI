<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\ApiController;
use App\Service;
use Illuminate\Http\Request;

class ServiceOrderController extends ApiController
{
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
