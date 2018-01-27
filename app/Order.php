<?php

namespace App;

use App\User;
use App\Review;
use App\Service;
use App\Customer;
use App\Transformers\OrderTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use softDeletes;
   
    protected $fillable = [
        'customer_id','service_id'
    ];

    public $transformer = OrderTransformer::class;
    
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
 