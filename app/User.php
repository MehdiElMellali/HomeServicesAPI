<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use App\Transformers\UserTransformer;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     


    use Notifiable,softDeletes,HasApiTokens;
    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';
    
    protected $table = 'users';
    protected $dates = ['deleted_at'];



    public $transformer = UserTransformer::class;
    



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email',
        'password',
        'verified',
        'verificatoin_token',
        'admin'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'verificatoin_token',
    ];

    public function isVerified(){
        return $this->verified == User::VERIFIED_USER;
    }

    public function isAdmin(){
        return $this->admin == User::ADMIN_USER;
        dd($this->admin);
    }

     public static function generateVerificationCode(){
        return str_random(40);
    }
}
