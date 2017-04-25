<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
Route::group(['namespace' => 'Package', 'as' => 'package.', 'prefix' => 'package'], function () {

    if (!Session::isStarted()) {
        Session::start();
    }
    /**
     * Essentials package
     */
    //Male:
    Route::get('essentials/male', 'EssentialsController@male')->name('essentials.male');
    Route::post('essentials/male', 'EssentialsController@store')->name('essentials.male');
    //Female:
    Route::get('essentials/female', 'EssentialsController@female')->name('essentials.female');
    //Kids:
    Route::get('essentials/kids', 'EssentialsController@kids')->name('essentials.kids');

    /**
     * Essentials Plus package
     */
    //Male:
    Route::get('essentials-plus/male', 'EssentialsPlusController@male')->name('essentials-plus.male');
    //Female
    Route::get('essentials-plus/female', 'EssentialsPlusController@female')->name('essentials-plus.female');
    //Kids:
    Route::get('essentials-plus/kids', 'EssentialsPlusController@kids')->name('essentials-plus.kids');

});

Route::group(['namespace' => 'Subscription', 'as' => 'subscription.', 'prefix' => 'subscription'], function () {

    Route::get('select', 'SubscriptionController@select')->name('subscription.select');
    //Route::post('select', 'SubscriptionController@store')->name('subscription.store');

    //Route::get('verify', 'SubscriptionController@verify')->name('subscription.verification');

    Route::get('/', 'SubscriptionController@index')->name('subscription.index');

    Route::get('/showAllProducts', 'SubscriptionController@showAllProducts')->name('subscription.showAllproducts');

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
