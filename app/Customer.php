<?php

namespace App;
<<<<<<< HEAD
use App\Review;
use App\Order;
use App\Scopes\CustomerScope;
=======
use App\Order;
use App\Review;
use App\Scopes\CustomerScope;
use App\Transformers\CustomerTransformer;
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b


class Customer extends User
{
	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new CustomerScope);
	}
<<<<<<< HEAD
=======
    public $transformer = CustomerTransformer::class;
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b

    public function orders()
    {
    	return $this->hasMany(Order::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
 