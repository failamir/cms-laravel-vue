<?php

Route::group(['prefix' => 'restapi', 'namespace' => 'Modules\Restapi\Http\Controllers'], function()
{
    Route::post('/index', 'RestapiController@index');
    Route::post('/menu', 'RestapiController@menu');
    Route::post('/menu', 'RestapiController@menu');
    Route::post('/slider', 'RestapiController@slider');
});
