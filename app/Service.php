<?php

namespace App;

use App\Order;
use App\Review;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\ServiceTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
     use softDeletes;

    protected $dates = ['deleted_at'];
    public $transformer = ServiceTransformer::class;
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
 