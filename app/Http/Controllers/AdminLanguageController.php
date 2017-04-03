<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminLanguageController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE LANGUAGE PAGE
	|--------------------------------------------------------------------------
	*/

	public function getAdminCreateLanguage() {
		$title = 'Admin | Create Language';

		return view('admin.pages.languages.create-language')
			->with('title', $title);
	}

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE LANGUAGE (POST)
	|--------------------------------------------------------------------------
	*/

	public function postCreateLanguage() {
		$validator = Validator::make(Input::all(), [
			// 'language_code' => '',
			// 'language_name_eng' => '',
			// 'language_name_srb' => '',
		]);

		if($validator->fails()) {
			return Redirect::route('admin-create-language')
				->withErrors($validator)
				->withInput();
		} else {
			$language_code = Input::get('language_code');
			$language_name_eng = Input::get('language_name_eng');
			$language_name_srb = Input::get('language_name_srb');

			$language = Language::create([
				'language_code' => $language_code,
				'language_name_eng' => $language_name_eng,
				'language_name_srb' => $language_name_srb,
			]);

			if($language) {
				return Redirect::route('admin-create-language')
					->with('success', 'Language is created successfully!');
			} else {
				return Redirect::route('admin-create-language')
					->with('error', 'There was a problem. Try again');
			}
		}
	}
}
