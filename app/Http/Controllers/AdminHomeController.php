<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\User;

class AdminHomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | ADMIN HOMEPAGE
    |--------------------------------------------------------------------------
    */
    public function getHome() {
        $title  = 'Admin | Homepage';

        return view('admin.home')
            ->with('title', $title);
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN CREATE USER PAGE
    |--------------------------------------------------------------------------
    */
    public function getCreateUser() {
        $title = 'Admin | Create User';

		$languages = Language::all();

        return view('admin.pages.users.create-user')
            ->with('title', $title)
			->with('languages', $languages);
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN VIEW USERS PAGE
    |--------------------------------------------------------------------------
    */
    public function getViewUsers() {

		$title = 'Admin | View Users';

		$users = User::paginate(10);

		$id = User::all('id');
		$email = User::all('email');
		$first_name = User::all('first_name');
		$last_name = User::all('last_name');
		$phone_number = User::all('phone_number');
		$created_at = User::all('created_at');

		return view('admin.pages.users.view-users')
		->with('title', $title)
		->with('users', $users)
		->with('id', $id)
		->with('email', $email)
		->with('first_name', $first_name)
		->with('last_name', $last_name)
		->with('phone_number', $phone_number)
		->with('created_at', $created_at);
    }
}
