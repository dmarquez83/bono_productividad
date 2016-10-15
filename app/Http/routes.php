<?php

Route::get('/', ['as' => 'home','uses' => 'HomeController@index',]);
Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index',]);
/*******************************LOGIN******************************************/
Route::get('login', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', [ 'as' => 'auth/login','uses' => 'Auth\AuthController@postLogin',]);
Route::get('logout', ['as' => 'auth/logout','uses' => 'Auth\AuthController@getLogout',]);

Route::get('public/password', [ 'as' => 'password/email', 'uses' => 'Auth\PasswordController@getEmail',]);
Route::post('public/password', ['as' => 'password/postEmail','uses' => 'Auth\PasswordController@postEmail']);
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', ['as' => 'password/postReset', 'uses' =>  'Auth\PasswordController@postReset']);

/*******************************FIN LOGIN******************************************/
/*Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin'], 'namespace' =>'Admin'], function () {*/
/*******************************ADMINISTRADOR******************************************/
Route::group(['prefix' => 'admin', 'namespace' =>'Admin'], function () {

    Route::resource('users','UsersController');
    Route::post('users_profile/{users}', ['as' => 'admin.users.update.profile', 'uses' => 'UsersController@update_profile',]);
    Route::post('users/update/password/{users}', ['as' => 'admin.users.update.password', 'uses' => 'UsersController@update_password',]);
    Route::post('update/avatar/{users}', ['as' => 'admin.users.update.avatar', 'uses' => 'UsersController@update_avatar',]);
    Route::resource('companies','CompaniesController');
    Route::resource('modules','ModulesController');
    Route::resource('groups','GroupsController');
    Route::resource('groups-users', 'GroupsUsersController', array('only' => array('create')));

    /* las rutas para el api de angular*/
    Route::resource('groups-users/api/users', 'GroupsUsersController',  array('only' => array('index', 'store', 'destroy')));
    Route::get('groups-users/api/users_list', 'GroupsUsersController@user_list');
    Route::get('groups-users/api/{user}/{group}', 'GroupsUsersController@group_user');
    Route::delete('groups-users/api', 'GroupsUsersController@group_user_delete');
    Route::get('groups-users/api/group_list', 'GroupsUsersController@group_list');
    Route::get('groups-users/api/groups_user_list', 'GroupsUsersController@groups_user_list');
    Route::get('groups-users/api/users_profile/{users}', 'UsersController@show_profile');
    Route::get('groups-users/api/users_profile', 'UsersController@show_profiles');
    /* fin de las rutas para el api de angular*/

});


Route::group(['prefix' => 'user'], function () {

     Route::get('profile', ['as' => 'user.profile', 'uses' => 'UsersController@index',]);
     Route::post('profile', ['as' => 'user.profile', 'uses' => 'UsersController@update_password',]);
     Route::post('update/{users}', ['as' => 'user.update', 'uses' => 'UsersController@update_avatar',]);
     Route::post('update/profile/{users}', ['as' => 'user.update.profile', 'uses' => 'UsersController@update_profile',]);

});
/*******************************FIN DE ADMINISTRADOR******************************************/

// API ROUTES ==================================
Route::group(array('prefix' => 'api'), function() {

    Route::resource('comments', 'CommentController',
        array('only' => array('index', 'store', 'destroy')));

});

Route::resource('admin/companies/api/comments', 'CommentController',
  array('only' => array('index', 'store', 'destroy')));

Route::get('angular', function() {
  return View::make('index');
});