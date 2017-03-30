<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminEventController extends Controller
{
	public function getAdminCreateEvent() {
		$title = 'Admin | Create Event';

		return view('admin.pages.events.create-event')
			->with('title', $title);
	}

	//postCreateEvent()

	public function postCreateEvent()
	{
		$validator = Validator::make(Input::all(),[
				// 'event_name' => 'required|max:60',
				// 'event_description' => '',
				// 'event_status' => '',
				// 'event_address' => '',
				// 'event_cities_id' => '',
				// 'event_countries_id' => '',

		]);

		if($validator->fails()){
			return Redirect::route('admin-create-event')
					->withErrors($validator)
					->withInput();
		}
		else{
			$event_type_id = Input::get('event_type_id');
			$event_name = Input::get('event_name');
			$event_description = Input::get('event_description');
			$event_status = Input::get('event_status');
			$event_date = Input::get('event_date');
            $event_start = Input::get('event_start');
            $event_end = Input::get('event_end');
			$event_address = Input::get('event_address');
			$event_cities_id = Input::get('event_cities_id');
			$event_countries_id = Input::get('event_countries_id');

			$date = new \DateTime();
            $current_date = $date->format('Y-m-d H:i:s');

			$event = Event::create([
				'event_type_id' => $event_type_id,
				'event_name' => $event_name,
				'event_image' => 'img/photo4.jpg',
				'event_description' => $event_description,
				'event_status' => $event_status,
				'event_date' => $event_date,
				'event_start' => $event_start,
				'event_end' => $event_end,
				'event_address' => $event_address,
				'event_cities_id' => $event_cities_id,
				'event_countries_id' => $event_countries_id,
			]);

			if($event){
				return Redirect::route('admin-create-event')
					->with('success', 'Event is created successfully!');
			}else{
				return Redirect::route('admin-create-event')
					->with('error', 'There was a problem. Try again');
			}
		}
	}
}
