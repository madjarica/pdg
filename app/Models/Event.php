<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

	protected $fillable = [
	    'event_type_id',
		'event_name',
		'event_description',
		'event-status',
		'event_image',
		'event_date',
		'event_start',
		'event_end',
		'event_address',
		'event_cities_id',
		'event_countries_id',
	];
}
