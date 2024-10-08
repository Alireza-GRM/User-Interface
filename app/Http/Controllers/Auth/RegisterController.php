<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/';

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
            'name' => ['required', 'string', 'max:255' , 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'NumberPhone' => ['required', 'string', 'max:15'],
            'language' => ['required', 'string'],
            'referral' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'image' => ['mimes:png,jpg,jpeg'],
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
    // $imageName = $data['image']->store('profile_pictures', 'public');
    $randomNumber = rand(100000, 999999);
    $UserAll = null;

    if (!empty($data['referral'])) 
    {
        $UserAll = User::where('referral_me', '=', $data['referral'])->first();
    }

    if($UserAll) {
        $referralCode = $UserAll->referral_me;
    } else {
        $referralCode = 0;
    }

    $image = time() .'-'. $data['image']->getClientOriginalName();
    $data['image']->move(public_path('ImageUser') , $image);

    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'phone_number' => $data['NumberPhone'],
        'language' => $data['language'],
        'profile_picture' => $image,
        'referral_code' => $referralCode ?? 0,
        'referral_me' => $randomNumber,
        'birthdate' => $data['date'],
    ]);
    }
}
