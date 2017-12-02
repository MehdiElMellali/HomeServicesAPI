<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Service;
use App\Customer;

class Review extends Model
{
     use softDeletes;

    protected $dates = ['deleted_at'];
	
	const APPROVED = '1';
    const UNAPPROVED = '0';
    const RATING= '1';
    const UNRATING= '0';


	protected $fillable = [
		'service_id','customer_id','rating','comment','approved'
	];

	public function isApproved(){
        return $this->approved == Review::APPROVED;
    }

    public function isRating(){
        return $this->rating == Review::RATING;
    }

    public function customers()
    {
    	return $this->belongsTo(Customer::class);
    }
    public function services()
    {
    	return $this->belongsTo(Service::class);
    }
}
