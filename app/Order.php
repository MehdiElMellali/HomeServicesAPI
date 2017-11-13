<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Service;
use App\Review;
use App\Customer;

class Order extends Model
{
   
    protected $fillable = [
        'customer_id','service_id'
    ];


	public function customers()
    {
    	return $this->belongsTo(Customer::class);
    }
    public function services()
    {
    	return $this->belongsTo(Service::class);
    }
}
 