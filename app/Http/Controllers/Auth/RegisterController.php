<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/check/route';

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
            'name',
            'email' => ['required', 'string', 'email','unique:users' ],
             'mobile_no',

            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'company_name',
            'registered_address',
            'country',
            'registered_number',
            'company_email',
            'company_phone',
            'seller',
            'is_deleted',
            'address1',
             'address2',
              'city',
             'state',
              'pincode'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['seller']=="Y")
        {
            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'password' => Hash::make($data['password']),
            'company_name' => $data['company_name'],
             'registered_number' => $data['registered_number'],
            'company_email' => $data['company_email'],
            'company_phone' => $data['country_code']." ".$data['company_phone'],
            'seller' => $data['seller'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'is_deleted' => 'N',
        ]);
            
        }
        else
        {
            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'password' => Hash::make($data['password']),
            'seller' => $data['seller'],
             'is_deleted' => 'N',
        ]);
        }
        
    }
     public function sellerExist(Request $request)
    {
        $userExist = User::where('company_phone',$request->phoneNumber)->count();
       if($userExist==0)
       {
            return response()->json(['success' => true]);
       }
       else
       {
            return response()->json(['success' => false]);
       }
    }
}
