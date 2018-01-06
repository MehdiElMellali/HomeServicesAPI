<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CustomerController extends ApiController
{
    
    public function __construct(){
        parent::__construct();
        $this->middleware('scope:read-general')->only(['index']);
        $this->middleware('can:view,customer')->only(['show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->allowedAdminAction();
        $customers = Customer::has('orders')->get();
        return $this->showAll($customers);
   //     return response()->json(['data' => $customers],200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //$customer = Customer::has('orders')->findOrFail($id);
        return $this->showOne($customer);
        //return response()->json(['data' => $customer],200);
    }
}
