<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Service;
use App\Review;
use App\Customer;

class Order extends Model
{
    use softDeletes;
   
    protected $fillable = [
        'customer_id','service_id'
    ];

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
 