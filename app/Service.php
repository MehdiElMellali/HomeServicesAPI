<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Review;
use App\Order;
=======
use App\Order;
use App\Review;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\ServiceTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b

class Service extends Model
{
     use softDeletes;

    protected $dates = ['deleted_at'];
<<<<<<< HEAD

=======
    public $transformer = ServiceTransformer::class;
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b
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
 