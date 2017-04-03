<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

	protected $fillable = [
		'language_code',
		'language_name_eng',
		'language_name_srb',
	];
}
