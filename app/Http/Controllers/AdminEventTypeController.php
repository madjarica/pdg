<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminEventTypeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | ADMIN CREATE EVENT TYPE PAGE
    |--------------------------------------------------------------------------
    */
    public function getAdminCreateEventType() {
    	$title = 'Admin | Create Event Type';

		return view('admin.pages.events.create-event-type')
			->with('title', $title);
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN CREATE EVENT TYPE (POST)
    |--------------------------------------------------------------------------
    */
	public function postCreateEventType() {
		$validator = Validator::make(Input::all(), [
			'event_name'=> 'required|max:60',
		]);

		if($validator->fails()) {
			return Redirect::route('admin-create-event-type')
				->withErrors($validator)
				->withInput();
		} else {
			$event_display_name = Input::get('event_name');
            $event_name = strtolower(str_replace(' ', '_', $event_display_name));

			$event_type = EventType::create([
				'event_name' => $event_name,
                'event_display_name' => $event_display_name
			]);

			if($event_type) {
				return Redirect::route('admin-create-event-type')
					->with('success', 'Event type is created.');
			} else {
				return Redirect::route('admin-create-event-type')
					->with('error', 'There was a problem. Try again');
			}
		}
	}
}
