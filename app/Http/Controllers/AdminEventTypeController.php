<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AdminEventTypeController extends Controller
{
    public function getAdminCreateEventType()
    {
    	$title = 'Admin | Create Event Type';

		return view('admin.pages.events.create-event-type')
			->with('title', $title);
    }

	public function postCreateEventType()
	{
		$validator = Validator::make(Input::all(), [
			//$event_name='required|max:60';
			//$event_display_name = '';
		]);

		if($validator->fails()){
			return Redirect::route('admin-create-event-type')
				->withErrors($validator)
				->withInput();
		}
		else{
			$event_name = Input::get('event_name');
			$event_display_name = Input::get('event_display_name');

			$date = new \DateTime;
			$current_date = $date->format('Y-m-d H:i:s');

			$event_type = EventType::create([
				'event_name' => $event_name,
				'event_display_name' => $event_display_name,
			]);

			if($event_type){
				return Redirect::route('admin-create-event')
					->with('success', 'Event type is created. Now create an event. ');
			}
			else{
				return Redirect::route('admin-create-event-type')
					->with('error', 'There was a problem. Try again');
			}
		}
	}
}
