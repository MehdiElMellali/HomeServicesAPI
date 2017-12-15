<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Review;
use App\Order;

class Service extends Model
{
     use softDeletes;

    protected $dates = ['deleted_at'];

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
 