<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller {

    public function postCreateUser() {
        $validator = Validator::make(Input::all(), [
//            'email' => 'required|max:100|unique:users,email',
//            'password' => '',
//            'confirm_password' => '',
//            'first_name' => 'max:60',
//            'last_name' => 'max:60',
//            'phone_number' => 'max:60',
        ]);

        if($validator->fails()) {
            return Redirect::route('admin-create-user')
                ->withErrors($validator)
                ->withInput();
        } else {
            $email = Input::get('email');
            $password = Input::get('password');
            $status = Input::get('status');
            $role = Input::get('role');
            $subscription = Input::get('subscription');
            $first_name = Input::get('first_name');
            $last_name = Input::get('last_name');
            $phone_number = Input::get('phone_number');
            $language = Input::get('language');

            $ip_address = getenv('HTTP_CLIENT_IP')?:
                getenv('HTTP_X_FORWARDED_FOR')?:
                    getenv('HTTP_X_FORWARDED')?:
                        getenv('HTTP_FORWARDED_FOR')?:
                            getenv('HTTP_FORWARDED')?:
                                getenv('REMOTE_ADDR');

            $date = new \DateTime();
            $current_date = $date->format('Y-m-d H:i:s');

            if($password == '') {
                $password = str_random(8);
            }

            $user = User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'status' => $status,
                'ip_address' => $ip_address,
                'last_login_date' => $current_date,
                'number_of_logins' => 0,
                'subscription' => $subscription,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'profile_image' => 'img/avatar.png',
                'phone_number' => $phone_number,
                'language_id' => $language
            ]);

            $user->roles()->attach($role);

            if($user) {
                return Redirect::route('admin-create-user')
                    ->with('success', 'User is created');
            } else {
                return Redirect::route('admin-create-user')
                    ->with('error', 'There was a problem. Try again.');
            }
        }
    }
}