<?php
Route::namespace('Admin')->group(function () {
    Route::any('/login', 'PublicController@login')->name('admin_login');
    Route::get('/logout', 'PublicController@logout')->name('admin_logout');

    Route::middleware('auth_admins')->group(function () {
        Route::prefix('auth_admins')->group(function () {
            Route::any('index','AuthAdminsController@index')->name('auth_admins_index');
            Route::any('add','AuthAdminsController@add' )->name('auth_admins_add');
        });
        Route::prefix('auth_roles')->group(function () {
            Route::any('index','AuthRolesController@index')->name('auth_roles_index');
            Route::any('add','AuthRolesController@add' )->name('auth_roles_add');
        });

        Route::get('/', 'IndexController@index')->name('admin_index');
        Route::get('/welcome', 'IndexController@main')->name('admin_main');
        Route::get('/test/index', 'TestController@index');
    });
});

