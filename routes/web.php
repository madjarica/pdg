<?php

/*
|--------------------------------------------------------------------------
| ADMIN HOMEPAGE
|--------------------------------------------------------------------------
*/
Route::get('/', [
    'as' => 'admin-home',
    'uses' => 'AdminHomeController@getHome'
]);

/*
|--------------------------------------------------------------------------
| AUTH LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login' , [
	'as' => 'login',
	'uses' => 'Auth\LoginController@showLoginForm',
]);

/*
|--------------------------------------------------------------------------
| AUTH LOGOUT
|--------------------------------------------------------------------------
*/
Route::get('/logout', [
	'as' => 'logout',
	'uses' => 'Auth\LoginController@logout',
]);

/*
|--------------------------------------------------------------------------
| AUTH REGISTER
|--------------------------------------------------------------------------
*/
Route::get('/register' , [
	'as' => 'register',
	'uses' => 'Auth\RegisterController@showRegistrationForm',
]);

/*
|--------------------------------------------------------------------------
| ADMIN CREATE USER
|--------------------------------------------------------------------------
*/
Route::get('/admin-create-user', [
   'as' => 'admin-create-user',
    'uses' => 'AdminHomeController@getCreateUser'
]);

/*
|--------------------------------------------------------------------------
| ADMIN VIEW USERS
|--------------------------------------------------------------------------
*/
Route::get('/admin-view-users', [
    'as' => 'admin-view-users',
    'uses' => 'AdminHomeController@getViewUsers'
]);

/*
|--------------------------------------------------------------------------
|ADMIN CREATE EVENT
|--------------------------------------------------------------------------
*/
Route::get('/admin-create-event', [
    'as' => 'admin-create-event',
    'uses' => 'AdminEventController@getAdminCreateEvent'
]);

/*
|--------------------------------------------------------------------------
|ADMIN VIEW EVENTS
|--------------------------------------------------------------------------
*/
Route::get('/admin-view-events', [
	'as' => 'admin-view-events',
	'uses' => 'AdminEventController@getViewEvents',
]);

/*
|--------------------------------------------------------------------------
|ADMIN CREATE EVENT TYPE
|--------------------------------------------------------------------------
*/
Route::get('/admin-create-event-type', [
	'as' => 'admin-create-event-type',
	'uses' => 'AdminEventTypeController@getAdminCreateEventType',
]);

/*
|--------------------------------------------------------------------------
|ADMIN CREATE LANGUAGE
|--------------------------------------------------------------------------
*/
Route::get('/admin-create-language', [
	'as' => 'admin-create-language',
	'uses' => 'AdminLanguageController@getAdminCreateLanguage',
]);

/*
|--------------------------------------------------------------------------
|ADMIN VIEW LANGUAGES
|--------------------------------------------------------------------------
*/
Route::get('/admin-view-languages', [
	'as' => 'admin-view-languages',
	'uses' => 'AdminLanguageController@getViewLanguages',
]);

/*
|--------------------------------------------------------------------------
|ADMIN CREATE COUNTRY
|--------------------------------------------------------------------------
*/
Route::get('/admin-create-country', [
	'as' => 'admin-create-country',
	'uses' => 'AdminCountryController@getAdminCreateCountry',
]);

/*
|--------------------------------------------------------------------------
|ADMIN VIEW COUNTRIES
|--------------------------------------------------------------------------
*/
Route::get('/admin-view-countries', [
	'as'	 => 'admin-view-countries',
	'uses' => 'AdminCountryController@getViewCountries',
]);

/*
|--------------------------------------------------------------------------
|ADMIN CREATE CITY
|--------------------------------------------------------------------------
*/
Route::get('/admin-create-city', [
	'as' => 'admin-create-city',
	'uses' => 'AdminCityController@getAdminCreateCity',
]);

/*
|--------------------------------------------------------------------------
|ADMIN VIEW CITIES
|--------------------------------------------------------------------------
*/
Route::get('/admin-view-cities', [
	'as' => 'admin-view-cities',
	'uses' => 'AdminCityController@getViewCities',
]);

/*
|--------------------------------------------------------------------------
|ADMIN CREATE GIFT
|--------------------------------------------------------------------------
*/
Route::get('/admin-create-gift', [
	'as' => 'admin-create-gift',
	'uses' => 'AdminGiftController@getAdminCreateGift',
]);

/*
|--------------------------------------------------------------------------
|ADMIN VIEW GIFTS
|--------------------------------------------------------------------------
*/
Route::get('/admin-view-gifts', [
	'as' => 'admin-view-gifts',
	'uses' => 'AdminGiftController@getViewGifts',
]);

/*
|--------------------------------------------------------------------------
| CSRF PROTECTION
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'App\Http\Middleware\VerifyCsrfToken'], function () {

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE USER (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/admin-create-user-post', [
		'as' => 'admin-create-user-post',
		'uses' => 'AdminUserController@postCreateUser'
	]);

	/*
	|--------------------------------------------------------------------------
	| AUTH LOGIN (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/login-post', [
		'as' => 'login-post',
		'uses' => 'Auth\LoginController@login'
	]);

	/*
	|--------------------------------------------------------------------------
	| AUTH REGISTER (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/register-post', [
		'as' => 'register-post',
		'uses' => 'Auth\RegisterController@register'
	]);

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE EVENT (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/admin-create-event-post', [
		'as' => 'admin-create-event-post',
		'uses' => 'AdminEventController@postCreateEvent'
	]);

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE EVENT TYPE (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/admin-create-event-type-post', [
		'as' => 'admin-create-event-type-post',
		'uses' => 'AdminEventTypeController@postCreateEventType',
	]);

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE LANGUAGE (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/admin-create-language-post', [
		'as' => 'admin-create-language-post',
		'uses' => 'AdminLanguageController@postCreateLanguage',
	]);

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE COUNTRY (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/admin-create-country-post',[
		'as' => 'admin-create-country-post',
		'uses' => 'AdminCountryController@postCreateCountry',
	]);

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE CITY (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/admin-create-city-post', [
		'as' => 'admin-create-city-post',
		'uses' => 'AdminCityController@postCreateCity',
	]);

	/*
	|--------------------------------------------------------------------------
	| ADMIN CREATE GIFT (POST)
	|--------------------------------------------------------------------------
	*/
	Route::post('/admin-create-gift-post', [
		'as' => 'admin-create-gift-post',
		'uses' => 'AdminGiftController@postCreateGift',
	]);
});

	/*
	|--------------------------------------------------------------------------
	| CREATE PERMISSIONS
	|--------------------------------------------------------------------------
	*/
	Route::get('/start', function() {
		$organizer = new App\Models\Role();
		$organizer->name         = 'Organizer';
		$organizer->display_name = 'Registered user that can organize an invent';
		$organizer->description  = 'Have access to all organizer related functions';
		$organizer->save();

		$invitee = new App\Models\Role();
		$invitee->name         = 'Invitee';
		$invitee->display_name = 'Registered user that is called to invent';
		$invitee->description  = 'Have access to all invitee related functions';
		$invitee->save();

		$admin = new App\Models\Role();
		$admin->name         = 'Administrator';
		$admin->display_name = 'Super user';
		$admin->description  = 'User that have access to all functions through admin area';
		$admin->save();

		$canOrganize = new App\Models\Permission();
		$canOrganize->name         = 'can-organize';
		$canOrganize->display_name = 'Can view content';
		$canOrganize->description  = 'Permission for viewing content';
		$canOrganize->save();

		$canInvite = new App\Models\Permission();
		$canInvite->name         = 'can-invite';
		$canInvite->display_name = 'Can add content';
		$canInvite->description  = 'Permission for adding content';
		$canInvite->save();

		$canAccessAdminArea = new App\Models\Permission();
		$canAccessAdminArea->name         = 'can-access-admin-area';
		$canAccessAdminArea->display_name = 'Can add content';
		$canAccessAdminArea->description  = 'Permission for adding content';
		$canAccessAdminArea->save();

		$organizer->attachPermission($canOrganize);
		$invitee->attachPermission($canInvite);
		$admin->attachPermission($canOrganize);
		$admin->attachPermission($canInvite);
		$admin->attachPermission($canAccessAdminArea);

		return 'Food around the corner, food around the corner, food around the corner for me!';
	});
