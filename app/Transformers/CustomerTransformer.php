<?php

namespace App\Transformers;

use App\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Customer $customer)
    {
        return [
            'identifier' => (int)$customer->id,
            'name' => (String)$customer->name,
            'email' => (String)$customer->email,
            'isVerified' => (int)$customer->verified,
            'creationDate' => (String)$customer->created_at,
            'lastChange' => (String)$customer->updated_at,
            'deletedDate' => isset($customer->deleted_at) ? (string) $customer->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('customers.show',$customer->id)
                ],
                [
                    'href' => route('customers.services.index',$customer->id),
                ],
                [
                    'rel' => 'customer.orders',
                    'href' => route('customers.orders.index',$customer->id),
                ],
                [
                    'rel' => 'user',
                    'href' => route('users.show', $customer->id),
                ],
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' => 'id',
            'name' => 'name',
            'email' => 'email',
            'isVerified' => 'verified',
            'creationDate' => 'created_at',
            'lastChange' => 'updated_at',
            'deletedDate' => 'deleted_at'
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null ;
    }


    public static function transformedAttribute($index)
    {
        $attributes = [
         'id'=>'identifier',
         'name'=>'name',
         'email'=>'email',
         'verified'=>'isVerified',
         'created_at'=>'creationDate',
         'updated_at'=>'lastChange',
         'deleted_at'=>'deletedDate'
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null ;
    }
}
