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
| CSRF PROTECTION
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'App\Http\Middleware\VerifyCsrfToken'], function () {

    Route::post('/admin-create-user-post', [
        'as' => 'admin-create-user-post',
        'uses' => 'AdminUserController@postCreateUser'
    ]);
});


/*
|--------------------------------------------------------------------------
| CREATE PERMISSIONS
|--------------------------------------------------------------------------
*/
//Route::get('/start', function() {
//    $organizer = new App\Models\Role();
//    $organizer->name         = 'Organizer';
//    $organizer->display_name = 'Registered user that can organize an invent';
//    $organizer->description  = 'Have access to all organizer related functions';
//    $organizer->save();
//
//    $invitee = new App\Models\Role();
//    $invitee->name         = 'Invitee';
//    $invitee->display_name = 'Registered user that is called to invent';
//    $invitee->description  = 'Have access to all invitee related functions';
//    $invitee->save();
//
//    $admin = new App\Models\Role();
//    $admin->name         = 'Administrator';
//    $admin->display_name = 'Super user';
//    $admin->description  = 'User that have access to all functions through admin area';
//    $admin->save();
//
//    $canOrganize = new App\Models\Permission();
//    $canOrganize->name         = 'can-organize';
//    $canOrganize->display_name = 'Can view content';
//    $canOrganize->description  = 'Permission for viewing content';
//    $canOrganize->save();
//
//    $canInvite = new App\Models\Permission();
//    $canInvite->name         = 'can-invite';
//    $canInvite->display_name = 'Can add content';
//    $canInvite->description  = 'Permission for adding content';
//    $canInvite->save();
//
//    $canAccessAdminArea = new App\Models\Permission();
//    $canAccessAdminArea->name         = 'can-access-admin-area';
//    $canAccessAdminArea->display_name = 'Can add content';
//    $canAccessAdminArea->description  = 'Permission for adding content';
//    $canAccessAdminArea->save();
//
//    $organizer->attachPermission($canOrganize);
//    $invitee->attachPermission($canInvite);
//    $admin->attachPermission($canOrganize);
//    $admin->attachPermission($canInvite);
//    $admin->attachPermission($canAccessAdminArea);
//
//    return 'IDES POD MAC BATO! POD MAC!';
// });