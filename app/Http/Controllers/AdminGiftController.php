<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gift;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminGiftController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE GIFT PAGE
	|--------------------------------------------------------------------------
	*/

	public function getAdminCreateGift() {
		$title = 'Admin | Create Gift';

		$events = Event::all();

		return view('admin.pages.gifts.create-gift')
			->with('title', $title)
			->with('events', $events);
	}

	/*
	|--------------------------------------------------------------------------
	| ADMIN VIEW GIFTS PAGE
	|--------------------------------------------------------------------------
	*/

	public function getViewGifts() {

		$title = 'Admin | View Gifts';

		$gifts = Gift::paginate(10);

		return view('admin.pages.gifts.view-gifts')
			->with('title', $title)
			->with('gifts', $gifts);
	}
	
	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE GIFT (POST)
	|--------------------------------------------------------------------------
	*/
	public function postCreateGift() {
		$validator = Validator::make(Input::all(), [
			// 'event_id' => '',
			// 'gift_name' => '',
			// 'gift_description' => '',
			// 'gift_images' => '',
			// 'gift_count' => '',
			// 'gift_price' => '',
			// 'gift_purchase_location' => '',
			// 'gift_url' => '',
			// 'gift_status' => '',
		]);

		if($validator->fails()) {
			return Redirect::route('admin-create-gift')
				->withErrors($validator)
				->withInput();
		} else {
			$event_id = Input::get('event_id');
			$gift_name = Input::get('gift_name');
			$gift_description = Input::get('gift_description');
			$gift_count = Input::get('gift_count');
			$gift_price = Input::get('gift_price');
			$gift_purchase_location = Input::get('gift_purchase_location');
			$gift_url = Input::get('gift_url');
			$gift_status = Input::get('gift_status');

			$gift = Gift::create([
				'event_id' => $event_id,
				'gift_name' => $gift_name,
				'gift_description' => $gift_description,
				'gift_images' => 'img/photo3.jpg',
				'gift_count' => $gift_count,
				'gift_price' => $gift_price,
				'gift_purchase_location' => $gift_purchase_location,
				'gift_url' => $gift_url,
				'gift_status' => $gift_status,
			]);

			if($gift) {
				return Redirect::route('admin-create-gift')
					->with('success', 'Gift is created successfully!');
			} else {
				return Redirect::route('admin-create-gift')
					->with('error', 'There was a problem. Try again.');
			}
		}
	}
}
