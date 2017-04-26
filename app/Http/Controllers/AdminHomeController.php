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

		return view('admin.pages.users.view-users')
		->with('title', $title)
		->with('users', $users);
    }
}
