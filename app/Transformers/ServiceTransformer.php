<?php

namespace App\Transformers;

use App\Service;
use League\Fractal\TransformerAbstract;

class ServiceTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Service $service)
    {
        return [
            'identifier' => (int)$service->id,
            'name' => (String)$service->title,
            'details' => (String)$service->description,
            'photo' => (String)$service->images,
            'creationDate' => (String)$service->created_at,
            'lastChange' => (String)$service->updated_at,
            'deletedDate' => isset($service->deleted_at) ? (string) $service->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('services.show',$service->id)
                ],
                [
                    'rel' => 'service.customers',
                    'href' => route('services.customers.index',$service->id),
                ],
                [
                    'rel' => 'service.services',
                    'href' => route('services.show',$service->id),
                ],
                [
                    'rel' => 'service.orders',
                    'href' => route('services.orders.index',$service->id),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' => 'id',
            'name' => 'title',
            'description' => 'details',
            'photo' => 'images',
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
            'title' => 'name',
            'description' => 'details',
            'images' => 'photo',
            'created_at' => 'creationDate',
            'updated_at' => 'lastChange',
            'deleted_at' => 'deletedDate',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

}
