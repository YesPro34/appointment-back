<?php

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
    SuccurcaleController::store($request);
});

Route::get('get-succurcale/{id}',function ($id) {
    SuccurcaleController::show($id);
});

Route::delete('delete-succurcale/{id}',function ($id) {
   SuccurcaleController::destroy($id);
});

Route::put('update-succurcale/{id}',function (Request $request, $id) {
    SuccurcaleController::update($request,$id);
 });

 Route::get('edit-succurcale/{id}',function ($id) {
    SuccurcaleController::edit($id);
});
 



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
