<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;

Route::get('/', function () {
    return view('admin/login/login');
});

Route::get('admin/login/login','loginController@getLoginAdmin');
Route::post('admin/login/login','loginController@postLoginAdmin');
Route::get('admin', function() {
    //
  return view('admin/layout/content');
});
Route::get('thu', function() {
  $User =User::where('id',1)->first();
   
    echo $User;
});
   // $user_class_ref= App\user_class_ref();
   //  $user_class_ref->id=1;
   //  $user_class_ref->user_id=1;
   //  $user_class_ref->class_id=1;

   //  $user_class_ref->sav



Route::group(['prefix'=>'admin'], function() {
    Route::group(['prefix' => 'user'], function() {
        Route::get('list_user', 'userController@getListUser');
        Route::get('edit_user/{id}', 'userController@getEditUser');
        Route::post('edit_user/{id}', 'userController@postEditUser');
        Route::get('add_user', 'userController@getAddUser');
        Route::post('add_user', 'userController@postAddUser');

    });
    Route::group(['prefix' => 'member'], function() {
        Route::get('list_member', 'memberController@getListMember');
        Route::get('edit_member/{id}', 'memberController@getEditMember');
        Route::post('edit_member/{id}', 'memberController@postEditMember');
        Route::get('add_member', 'memberController@getAddMember');
        Route::post('add_member', 'memberController@postAddMember');

    });
    Route::group(['prefix' => 'layout'], function() {
        Route::get('content', function () {
    return view('admin/layout/content');
  });
    });

    // admin/login/login

});