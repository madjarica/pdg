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
|ADMIN CREATE EVENT TYPE
|--------------------------------------------------------------------------
*/

Route::get('/admin-create-event-type', [
    'as' => 'admin-create-event-type',
    'uses' => 'AdminEventTypeController@getAdminCreateEventType',
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
