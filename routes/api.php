<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RenndezvousController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\SuccurcaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteTechnicienProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// api of Succurcale Model
Route::post('create-succurcale', function (Request $request) {
    return SuccurcaleController::store($request);
});

Route::get('get-succurcale/{id}', function ($id) {
    return SuccurcaleController::show($id);
});

Route::delete('delete-succurcale/{id}', function ($id) {
    return SuccurcaleController::destroy($id);
});

Route::put('update-succurcale/{id}', function (Request $request, $id) {
    return SuccurcaleController::update($request, $id);
});

Route::get('edit-succurcale/{id}', function ($id) {
    return SuccurcaleController::edit($id);
});


Route::get('getAll-succurcale', function () {
    return SuccurcaleController::showAll();
});

//------------------------------------------------------------------------------------------
// api of Client Model

Route::post('create-client', function (Request $request) {
    return ClientController::store($request);
});

Route::get('get-client/{id}', function ($id) {
    return ClientController::show($id);
});

Route::delete('delete-client/{id}', function ($id) {
    return ClientController::destroy($id);
});

Route::put('update-client/{id}', function (Request $request, $id) {
    return ClientController::update($request, $id);
});

Route::get('edit-client/{id}', function ($id) {
    return ClientController::edit($id);
});

//------------------------------------------------------------------------------------------
// api of Service Model

Route::post('create-service', function (Request $request) {
    return ServiceController::store($request);
});

Route::get('get-service/{id}', function ($id) {
    return ServiceController::show($id);
});

Route::delete('delete-service/{id}', function ($id) {
    return ServiceController::destroy($id);
});

Route::put('update-service/{id}', function (Request $request, $id) {
    return ServiceController::update($request, $id);
});

Route::get('edit-service/{id}', function ($id) {
    return ServiceController::edit($id);
});

Route::get('list-services', function () {
    return ServiceController::index();
});

// api of Appointment
//-------------------------------------------------------

Route::post('create-appointment', function (Request $request) {
    return RenndezvousController::store($request);
});

Route::put('update-appointment/{id}', function (Request $request, $id) {
    return RenndezvousController::update($request, $id);
});

Route::get('get-appointment/{id}', function ($id) {
    return RenndezvousController::show($id);
});

Route::delete('delete-appointment/{id}', function ($id) {
    return RenndezvousController::destroy($id);
});

Route::get('getAll-appointment', function () {
    return RenndezvousController::showAll();
});

// api of Techniciens

Route::post('create-technicien', function (Request $request) {
    return TechnicienController::store($request);
});

Route::get('get-technicien/{id}', function ($id) {
    return TechnicienController::show($id);
});

Route::delete('delete-technicien/{id}', function ($id) {
    return TechnicienController::destroy($id);
});

Route::put('update-technicien/{id}', function (Request $request, $id) {
    return TechnicienController::update($request, $id);
});

Route::get('edit-technicien/{id}', function ($id) {
    return TechnicienController::edit($id);
});

Route::get('list-techniciens', function () {
    return TechnicienController::index();
});




// //------------------------------------
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
