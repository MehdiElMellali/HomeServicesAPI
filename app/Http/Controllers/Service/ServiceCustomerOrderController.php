<?php

namespace App\Http\Controllers\Service;

use App\Order;
use App\Service;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transformers\OrderTransformer;
use App\Http\Controllers\ApiController;

class ServiceCustomerOrderController extends ApiController
{

    public function __construct(){
        parent::__construct();
        $this->middleware('transform.input:'.OrderTransformer::class)->only(['store']);
        $this->middleware('scope:purchase-service')->only(['store']);
        $this->middleware('auth:api')->except(['index']);
    }
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
