<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Mail\userCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiController;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users  = User::all();
        return $this->showAll($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
        $this->validate($request,$rules);
        $data =  $request->all();
        $data['password'] = bcrypt($request->password);
        $data['verified'] = User::UNVERIFIED_USER;
        $data['verificatoin_token'] = User::generateVerificationCode();
        $data['admin'] = User::REGULAR_USER;

        $user = User::create($data);

        return $this->showOne($user);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $this->showOne($user);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $rules = [
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'min:6|confirmed',
            'admin' => 'in:'.User::ADMIN_USER.','.User::REGULAR_USER,
        ];

        if($request->has('name')){
            $user->name = $request->name;
        }

        if($request->has('email') && $user->email != $request->email){
            $user->verified = User::UNVERIFIED_USER;
            $user->verificatoin_token = User::generateVerificationCode();
            $user->email = $request->email;
        }

        if($request->has('password')){
            $user->password = $request->password;
        }

        if($request->has('admin')){
            if(!$user->isVerified())
            {
                return $this->errorResponse('only verified users cam modify the admin field ',409);
            }
            $user->admin = $request->admin;
        }
        if(!$user->isDirty()){
            return $this->errorResponse('You need to specify a different value to update',442);
        }

        $user->save();

        return $this->showOne($user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return $this->showOne($user);
    }
    public function verify($token)
    {
        $user = User::where('verificatoin_token',$token)->firstOrFail();
        $user->verified = User::VERIFIED_USER;
        $user->verificatoin_token = null;
        $user->save();
        return $this->showMessage('The account has been virefied succesfully');

    }
    public function resend(User $user){
        if($user->isVerified())
        {
            return $this->errorResponse('This User is aready verify',409);
        }
        
        etry(5,function() use($user){
            Mail::to($user)->send(new userCreated($user));
    },100);

        return $this->showMessage('The verification email has been resend');
    }
}
