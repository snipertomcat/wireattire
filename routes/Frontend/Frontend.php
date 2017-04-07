<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');
Route::get('wired',  'FrontendController@wired')->name('wired');

/*
 * These routes don't require user to be logged in.
 * All these are prefixed with 'package.'
 */
Route::group(['namespace' => 'Package', 'as' => 'package.'], function () {
        /*
         * Essentials package
         */
        //Male:
        Route::get('essentials/male', 'EssentialsController@essentialsMale')->name('essentials.male');
        //Female:
        Route::get('essentials/female', 'EssentialsController@essentialsFemale')->name('essentials.female');

});

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
