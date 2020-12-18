<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use DB;
use App\Usertheme;
use App\Payment_card;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'bname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'phone_number' => ['required',],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pwd' => ['required', 'string', 'min:8'],
            'country' => ['required',],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $start = new Carbon();
        $date = $start->addDays(14);
        
        $user =  User::create([
            'business_name' => $data['bname'],
            'first_name' => $data['fname'],
            'last_name' => $data['lname'],
            'number' => '+'.$data['phone_number_phoneCode'].''.$data['phone_number'],
            'email' => $data['email'],
            'country' => $data['country'],
            'password' => Hash::make($data['pwd']),
            'expiry_date' => $date,
        ]);
        $user->roles()->attach(1);
        
        $user_id =  DB::getPdo()->lastInsertId();
        \App\Usertheme::create([                    
        'user_id' => $user_id,
        'user_template' => $data['template_name'],
        ]);
        return $user;
    }


    
}
