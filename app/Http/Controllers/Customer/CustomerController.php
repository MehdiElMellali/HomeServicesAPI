<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::has('orders')->get();
        return response()->json(['data' => $customers],200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::has('orders')->findOrFail($id);
        return response()->json(['data' => $customer],200);
    }
}
