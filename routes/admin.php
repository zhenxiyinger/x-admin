<?php
Route::namespace('Admin')->group(function () {
    Route::any('/login', 'PublicController@login')->name('admin_login');
    Route::get('/logout', 'PublicController@logout')->name('admin_logout');

    Route::middleware('auth_admin')->group(function () {
        Route::prefix('auth_admins')->group(function () {
            Route::any('index','AuthAdminsController@index')->name('auth_admins_index');
            Route::any('add','AuthAdminsController@add' )->name('auth_admins_add');
        });
        Route::get('/', 'IndexController@index')->name('admin_index');
        Route::get('/welcome', 'IndexController@welcome')->name('admin_welcome');
    });
});

