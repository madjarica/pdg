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
	|ADMIN VIEW COUNTRIES PAGE
	|--------------------------------------------------------------------------
	*/
	public function getViewCountries() {

		$title = 'Admin | View Countries';

		$countries = Country::paginate(10);

		$id = Country::all('id');
		$country_code = Country::all('country_code');
		$country_name_eng = Country::all('country_name_eng');
		$country_name_srb = Country::all('country_name_srb');
		$created_at = Country::all('created_at');

		return view('admin.pages.countries.view-countries')
			->with('title', $title)
			->with('countries', $countries)
			->with('id', $id)
			->with('country_code', $country_code)
			->with('country_name_eng', $country_name_eng)
			->with('country_name_srb', $country_name_srb)
			->with('created_at', $created_at);
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
