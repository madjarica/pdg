<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    protected $table = 'events';

	protected $fillable = [
	    'event_type_id',
        'event_user_id',
		'event_name',
		'event_description',
		'event_status',
		'event_image',
		'event_date',
		'event_start',
		'event_end',
		'event_address',
		'event_city_id',
		'event_country_id',
	];

	public function gifts() {
		return $this->hasMany('App\Models\Gift');
	}
}
