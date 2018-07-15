<?php
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('config/index', 'ConfigController@index');
    Route::get('config/add', 'ConfigController@add');
    Route::get('config/edit/{id}', 'ConfigController@edit');
    Route::get('config/delete/{id}', 'ConfigController@delete');
    Route::post('config/doPost', 'ConfigController@doPost');
});