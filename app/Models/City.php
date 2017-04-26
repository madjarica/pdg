<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
    protected $table = 'cities';

    protected $fillable = [
        'country_id',
        'city_name_eng',
        'city_name_srb',
        'zip_code'
    ];

	//City belongsTo a Country, a Country hasMany cities
	public function country() {
		return $this->belongsTo( 'App\Models\Country' );
	}
}
