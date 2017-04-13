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
	| ADMIN VIEW LANGUAGES PAGE
	|--------------------------------------------------------------------------
	*/
	public function getViewLanguages() {

		$title = 'Admin | View Languages';

		$languages = Language::paginate(10);

		$id = Language::all('id');
		$language_code = Language::all('language_code');
		$language_name_eng = Language::all('language_name_eng');
		$language_name_srb = Language::all('language_name_srb');
		$created_at = Language::all('created_at');

		return view('admin.pages.languages.view-languages')
			->with('title', $title)
			->with('languages', $languages)
			->with('id', $id)
			->with('language_code', $language_code)
			->with('language_name_eng', $language_name_eng)
			->with('language_name_srb', $language_name_srb)
			->with('created_at', $created_at);
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
