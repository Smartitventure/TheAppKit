<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use DB;
use App\Usertheme;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public $successStatus = 200;
    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->accessToken; 
            return response()->json(['status'=>true,'login_data' => $success], $this->successStatus); 
        }
        else { 
            return response()->json(['status'=>false,
            'login_data' =>'Unauthorised'], 401); 
        } 
    }

    public function register(Request $request) 
    {
        $user =  User::create([
            'business_name' => $request['bname'],
            'first_name' => $request['fname'],
            'last_name' => $request['lname'],
            'number' => '+'.$request['phone_number_phoneCode'].''.$request['phone_number'],
            'email' => $request['email'],
            'country' => $request['country'],
            'password' => Hash::make($request['pwd']),
        ]);

        $user->roles()->attach(1);

        $user_id =  DB::getPdo()->lastInsertId();
        \App\Usertheme::create([                    
            'user_id' => $user_id,
            'theme_name' => $request['theme_name'],
        ]);

        return response()->json([
            "message" => "User record created"
        ], 200);
    }
    
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    }
   
}
