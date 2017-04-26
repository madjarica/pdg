<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model {
    protected $table = 'gifts';

	protected $fillable = [
		'event_id',
		'gift_name',
		'gift_description',
		'gift_images',
		'gift_count',
		'gift_price',
		'gift_purchase_location',
		'gift_url',
		'gift_status'
	];

	public function event() {
		return $this->belongsTo('App\Models\Event');
	}
}
