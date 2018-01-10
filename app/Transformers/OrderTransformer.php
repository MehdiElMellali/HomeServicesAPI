<?php

namespace App\Transformers;

use App\Order;
use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Order $order)
    {
        return [
            'identifier' => (int)$order->id,
            'customerIdentifier' => (int)$order->customer_id,
            'serviceIdentifier' => (int)$order->service_id,
            'creationDate' => (String)$order->created_at,
            'lastChange' => (String)$order->updated_at,
            'deletedDate' => isset($order->deleted_at) ? (string) $customer->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('orders.show',$order->id)
                ],
                [
                    'rel' => 'customers',
                    'href' => route('customers.show',$order->customer_id),
                ],
                [
                    'rel' => 'services',
                    'href' => route('services.show',$order->service_id),
                ]
            ]
           
        ];
    }


    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' => 'id',
            'customerIdentifier' => 'customer_id',
            'serviceIdentifier' => 'service_id',
            'creationDate' => 'created_at',
            'lastChange' => 'updated_at',
            'deletedDate' => 'deleted_at'
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null ;
    }


    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identifier',
            'customer_id'=>'customerIdentifier',
            'service_id'=>'serviceIdentifier',
            'created_at' => 'creationDate',
            'updated_at' => 'lastChange',
            'deleted_at' => 'deletedDate',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

}
