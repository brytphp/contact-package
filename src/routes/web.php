<?php


Route::group(['prefix' => 'contact','namespace'=>'Bryt\Contact\Http\Controllers'], function() {

    Route::get('/', 'ContactController@index')->name('show_contact_form');

    Route::post('/', 'ContactController@send')->name('submit_contact_form');

});



