<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model {

    use EntrustUserTrait;

    protected $table = 'users';

    protected $fillable = [
        'email',
        'password',
        'password_temp',
        'code',
        'active',
        'status',
        'first_name',
        'last_name',
        'language_id',
        'phone_number',
        'profile_image',
        'subscription',
        'ip_address',
        'last_login_date',
        'subscription',
        'number_of_logins'
    ];

    protected $hidden = [
        'password',
        'password_temp',
        'code',
        'remember_token',
    ];
}