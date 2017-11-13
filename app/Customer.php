<?php

namespace App;
use App\Review;
use App\Order;


class Customer extends User
{
    public function orders()
    {
    	return $this->hasMany(Order::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
 