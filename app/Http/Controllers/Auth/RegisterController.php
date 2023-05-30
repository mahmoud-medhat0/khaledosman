<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\students;
use App\Providers\RouteServiceProvider;
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
        $messages = [
            'name.required'=> 'حقل الاسم مطلوب.',
            'name.max'=>'يجب ان لا يزيد الاسم عن 50 حرف.',
            'name.string'=>'حقل الاسم يجب ان يكون نص.',
            'NationalId.required'=>'حقل الرقم القومي مطلوب.',
            'NationalId.int'=>'الرقم القومي يجب ان يكون رقم.',
            'NationalId.min'=>'الرقم القومي يجب ان لا يقل عن 15 رقم.',
            'NationalId.unique'=>'هذا الرقم القومي مستخدم من قبل.',
            'number.required'=>'رقم الهاتف مطلوب.',
            'number.min'=>'رقم الهاتف يجب ان لا يقل عن 11 رقم.',
            'number.unique'=>'رقم الهاتف هذا مستخدم من قبل.',
            'number.regex'=>'برجاء ادخال رقم هاتف صالح.',
            'password.required'=>'حقل الرقم السري مطلوب.',
            'password.string'=>'الرقم السري يجب ان يكون نص.',
            'password.min'=>'الرقم السري يجب ان لا يقل عن 8 احرف و ارقام.',
            'password.confirmed'=>'يجب ان يكون الرقم السري مطابق لتاكيد الرقم السري.'
        ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'NationalId'=>['required','int','min:15','unique:students,NationalId'],
            'number' => ['required', 'min:11', 'unique:students,number','regex:/^01[0-2,5]\d{8}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return students::create([
            'name' => $data['name'],
            'NationalID' => $data['NationalId'],
            'number'=>$data['number'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
