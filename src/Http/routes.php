<?php
Route::get('/', 'DemoController@index');
Route::post('/', 'DemoController@store')->name('demo.store');
