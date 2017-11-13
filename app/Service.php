<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;
use App\Order;

class Service extends Model
{
	 protected $fillable = [
        'title','description','images'
    ];
	
    public function orders()
    {
    	return $this->hasMany(Order::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
 