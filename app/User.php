<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
=======
use App\Transformers\UserTransformer;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     


    use Notifiable,softDeletes;
    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';
    
    protected $table = 'users';
    protected $dates = ['deleted_at'];

<<<<<<< HEAD
=======
    public $transformer = UserTransformer::class;
    



>>>>>>> 7ace0be922ec9249808da2097bb05881cdec7a8b
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
    }

     public static function generateVerificationCode(){
        return str_random(40);
    }
}
