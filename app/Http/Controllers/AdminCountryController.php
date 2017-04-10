<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminCountryController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE COUNTRY PAGE
	|--------------------------------------------------------------------------
	*/

	public function getAdminCreateCountry() {
		$title = 'Admin | Create Country';

		return view('admin.pages.countries.create-country')
			->with('title', $title);
	}

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE COUNTRY (POST)
	|--------------------------------------------------------------------------
	*/
	
	public function postCreateCountry() {
		$validator = Validator::make(Input::all(), [
			// 'country_code' => '',
			// 'country_name_eng' => '',
			// 'country_name_srb' => '',
		]);

		if($validator->fails()) {
			return Redirect::route('admin-create-country')
				->withErrors($validator)
				->withInput();
		} else {
			$country_code = Input::get('country_code');
			$country_name_eng = Input::get('country_name_eng');
			$country_name_srb = Input::get('country_name_srb');

			$country = Country::create([
				'country_code' => $country_code,
				'country_name_eng' => $country_name_eng,
				'country_name_srb' => $country_name_srb,
			]);

			if ($country) {
				return Redirect::route('admin-create-country')
					->with('success', 'Country is created successfully!');
			} else {
				return Redirect::route('admin-create-country')
					->with('error', 'There was a problem. Try again.');
			}
		}
	}
}
