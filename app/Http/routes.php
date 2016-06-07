<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/login', function () {
    return view('login');
});

Route::get('/db', function () {
    return DB::select('select database()');
});

// Route to get json with all Vehicule Manufacturers
Route::get('/vehicule/manufacturer','VehiculeManufacturerController@jsonVehiculeManufacturer');

/*
* Route to get all vehicule models for a given Vehicule Manufacturer where
* {id} is the id of the manufacturer
*/
Route::get('/vehicule/manufacturer/{id}/model','VehiculeModelController@jsonVehiculeModel');

/*
* route to vehicules main page
*/
Route::get('/vehicule', 'VehiculeController@index');

/*
* route to create a new vehicule
*/
Route::post('/vehicule/create', 'VehiculeController@store');

/*
* route to get all vehicules for a given client where {id} is the id of the 
* client
*/
Route::get('/vehicule/client/{id}', 'VehiculeController@jsonVehiculeClient');

