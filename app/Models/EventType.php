<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $table = 'event_types';

	protected $fillable = [
		'event_name' ,
		'event_display_name',
	];
	
}
