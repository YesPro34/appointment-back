<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RenndezvousController;
use App\Http\Controllers\SuccurcaleController;
use App\Models\Succurcale;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// api of Succurcale Model
Route::post('create-succurcale',function (Request $request){
      return SuccurcaleController::store($request);
});

Route::get('get-succurcale/{id}',function ($id) {
      return SuccurcaleController::show($id);
});

Route::delete('delete-succurcale/{id}',function ($id) {
      return SuccurcaleController::destroy($id);
});

Route::put('update-succurcale/{id}',function (Request $request, $id) {
      return SuccurcaleController::update($request,$id);
});

 Route::get('edit-succurcale/{id}',function ($id) {
      return SuccurcaleController::edit($id);
});

//------------------------------------------------------------------------------------------
// api of Client Model
 


Route::post('create-client',function (Request $request){
    ClientController::store($request);
});

Route::get('get-client/{id}',function ($id) {
    return ClientController::show($id);
});

Route::delete('delete-client/{id}',function ($id) {
    ClientController::destroy($id);
});

Route::put('update-client/{id}',function (Request $request, $id) {
    ClientController::update($request,$id);
 });

 Route::get('edit-client/{id}',function ($id) {
    return ClientController::edit($id);
});



// api of Appointment-------------------------------------------------------
Route::post('create-appointment',function (Request $request){
    return RenndezvousController::store($request);
});

Route::put('update-appointment/{id}',function (Request $request, $id){
    return RenndezvousController::update($request, $id);
});

Route::get('get-appointment/{id}',function ($id){
    return RenndezvousController::show($id);
});

Route::delete('delete-appointment/{id}',function ($id) {
    return RenndezvousController::destroy($id);
});

// //------------------------------------
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });