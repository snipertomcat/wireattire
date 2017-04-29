<?php

/**
 * All route names are prefixed with 'admin.'.
 */

Route::group([
    'prefix'     => 'scraper',
    'as'         => 'scraper.',
    'namespace'  => 'Scraper',
], function () {

    /*
     * Web scraper functionality
     */
    Route::get('scraper', 'ScraperController@index')->name('index');

    Route::get('show', 'ScraperController@show')->name('show');

    Route::get('edit', 'ScraperController@edit')->name('edit');

    Route::get('mark', 'ScraperController@mark')->name('mark');

    Route::get('destroy', 'ScraperController@destroy')->name('destroy');

    Route::get('restore', 'ScraperController@restore')->name('restore');

    Route::get('delete-permanently', 'ScraperController@delete_permanently')->name('delete-permanently');

    Route::get('login-as', 'ScraperController@login_as')->name('login-as');

    Route::get('get', 'ScraperTableController')->name('scraper.get');

});
