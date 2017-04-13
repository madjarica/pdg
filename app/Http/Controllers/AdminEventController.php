<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Event;
use App\Models\EventType;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminEventController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | ADMIN CREATE EVENT PAGE
    |--------------------------------------------------------------------------
    */
	public function getAdminCreateEvent() {
		$title = 'Admin | Create Event';

		$event_types = EventType::all();
		$countries = Country::all();
		$cities = City::all();

		return view('admin.pages.events.create-event')
			->with('title', $title)
            ->with('event_types', $event_types)
            ->with('countries', $countries)
            ->with('cities', $cities);
	}

	/*
	|--------------------------------------------------------------------------
	| ADMIN VIEW EVENTS PAGE
	|--------------------------------------------------------------------------
	*/
	public function getViewEvents() {

		$title = 'Admin | View Events';

		$events = Event::paginate(10);

		$id = Event::all('id');
		$event_name = Event::all('event_name');
		$event_description = Event::all('event_description');
		$event_address = Event::all('event_address');
		$event_date = Event::all('event_date');
		$created_at = Event::all('created_at');

		return view('admin.pages.events.view-events')
			->with('title' , $title)
			->with('events', $events)
			->with('id', $id)
			->with('event_name', $event_name)
			->with('event_description', $event_description)
			->with('event_address', $event_address)
			->with('event_date', $event_date)
			->with('created_at', $created_at);
	}
    /*
    |--------------------------------------------------------------------------
    | ADMIN CREATE EVENT (POST)
    |--------------------------------------------------------------------------
    */
	public function postCreateEvent() {
		$validator = Validator::make(Input::all(), [
//		    'event_type_id' => '',
//            'event_user_id' => '',
//            'event_name' => 'required|max:60',
//            'event_description' => '',
//            'event_status' => '',
//            'event_image' => '',
//            'event_start' => '',
//            'event_end' => '',
//            'event_date' => '',
//            'event_address' => '',
//            'event_city_id' => '',
//            'event_country_id' => '',
		]);

		if($validator->fails()) {
			return Redirect::route('admin-create-event')
					->withErrors($validator)
					->withInput();
		} else {
			$event_type_id = Input::get('event_type_id');
			$event_user_id = 1;
			$event_name = Input::get('event_name');
			$event_description = Input::get('event_description');
			$event_status = Input::get('event_status');
            $event_start = Input::get('event_start');
            $event_end = Input::get('event_end');
            $event_date = Input::get('event_date');
            $event_address = Input::get('event_address');
			$event_city_id = Input::get('event_city_id');
			$event_country_id = Input::get('event_country_id');

			$event = Event::create([
				'event_type_id' => $event_type_id,
                'event_user_id' => $event_user_id,
				'event_name' => $event_name,
                'event_description' => $event_description,
                'event_status' => $event_status,
                'event_image' => 'img/photo4.jpg',
				'event_start' => $event_start,
                'event_end' => $event_end,
                'event_date' => $event_date,
                'event_address' => $event_address,
				'event_city_id' => $event_city_id,
				'event_country_id' => $event_country_id,
			]);

			if($event) {
				return Redirect::route('admin-create-event')
					->with('success', 'Event is created successfully!');
			} else {
				return Redirect::route('admin-create-event')
					->with('error', 'There was a problem. Try again');
			}
		}
	}
}
