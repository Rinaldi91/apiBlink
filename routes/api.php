<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/countries','CountryController');

Route::group(['prefix'=>'countries'],function(){

	Route::apiResource('/{country}/regions','RegionController');

});