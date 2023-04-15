<?php

use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthController;
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

/*route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/organisation/{id}/comment', [OrganisationController::class, 'comments']);
Route::get('/organisation', [OrganisationController::class, 'index']);
Route::get('/tag', [TagController::class, 'index']);
Route::post('/admin/login', [AuthController::class, 'login']);

//require __DIR__.'/admin.php';
                 
Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/admin'], function(){
    Route::apiResource('/organisation', OrganisationController::class, ['except' => ['show', 'index']]);
    Route::apiResource('/tag', TagController::class, ['except' => ['show', 'index']]);
    

Route::post('/organisation/{id}/comment', [OrganisationController::class, 'store_comment']);
Route::delete('/organisation/{id}/comment/{comment_id}', [OrganisationController::class, 'destroy_comment']);
Route::put('/organisation/{id}/comment/{comment_id}', [OrganisationController::class, 'edit_comment']);
    

});