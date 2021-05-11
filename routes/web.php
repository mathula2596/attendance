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
Route::get('manageRedirect',function(){
    $user = Auth::user();
   // return $user;
    if($user->hasRole(array('Admin'))){
        return redirect("/user");
    }
    if($user->hasRole('Employee')){
        return redirect("/attendance");
    }
   
})->name('manageRedirect');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::resource('permission', 'Admin\PermissionController');
    Route::resource('attendance', 'Admin\AttendanceController');
    Route::resource('role', 'Admin\RoleController');
    Route::resource('user', 'Admin\UserController');
    Route::name('password.edit')->get('password-change', 'Admin\UserController@passwordReset');
    Route::name('password.update')->post('password-change', 'Admin\UserController@postPasswordReset');

});
Route::get('/', function () {
    return redirect()->route('dashboard');
});
Route::get('config-cache',function(){
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'success';
});
Auth::routes();



