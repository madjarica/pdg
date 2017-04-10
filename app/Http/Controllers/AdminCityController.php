<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminCityController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE CITY PAGE
	|--------------------------------------------------------------------------
	*/

    public function getAdminCreateCity() {
    	$title = 'Admin | Create City';

		$countries = Country::all();

		return view('admin.pages.cities.create-city')
			->with('title', $title)
			->with('countries', $countries);
    }

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE CITY (POST)
	|--------------------------------------------------------------------------
	*/
	
	public function postCreateCity() {
		$validator = Validator::make(Input::all(), [
			// 'country_id' => '',
			// 'city_name_eng' => '',
			// 'city_name_srb' => '',
			// 'zip_code' => '',
		]);

		if($validator->fails()) {
			return Redirect::route('admin-create-city')
				->withErrors($validator)
				->withInput();
		} else {
			$country_id = Input::get('country_id');
			$city_name_eng = Input::get('city_name_eng');
			$city_name_srb = Input::get('city_name_srb');
			$zip_code = Input::get('zip_code');

			$city = City::create([
				'country_id' => $country_id,
				'city_name_eng' => $city_name_eng,
				'city_name_srb' => $city_name_srb,
				'zip_code' => $zip_code,
			]);

			if($city) {
				return Redirect::route('admin-create-city')
					->with('success', 'City is created successfully!');
			} else {
				return Redirect::route('admin-create-city')
					->with('error', 'There was a problem. Try again.');
			}
		}
	}
}
