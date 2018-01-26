<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Service;
use App\Review;
use App\Customer;
=======
use App\User;
use App\Review;
use App\Service;
use App\Customer;
use App\Transformers\OrderTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b

class Order extends Model
{
    use softDeletes;
   
    protected $fillable = [
        'customer_id','service_id'
    ];

<<<<<<< HEAD
=======
    public $transformer = OrderTransformer::class;
    
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b
    protected $dates = ['deleted_at'];

	public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }
    public function service()
    {
    	return $this->belongsTo(Service::class);
    }
}
 