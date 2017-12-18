<?php

namespace App;
use App\Order;
use App\Review;
use App\Scopes\CustomerScope;
use App\Transformers\CustomerTransformer;


class Customer extends User
{
	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new CustomerScope);
	}
    public $transformer = CustomerTransformer::class;

    public function orders()
    {
    	return $this->hasMany(Order::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
 