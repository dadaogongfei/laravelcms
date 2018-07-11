<?php
Route::get('/', function () {
    return view('index/index');
});
Route::get('/hello/laravelacademy',['as'=>'academy',function(){
    return 'Hello LaravelAcademy！';
}]);
Route::get('/testNamedRoute',function(){
    return route('academy');
});
Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        echo 'hello!';
    }]);
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('config/index', 'ConfigController@index');
});