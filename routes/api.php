<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AssistenceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\EmpadronamientoController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CrudSchool;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('schools', [CrudSchool::class, 'list']);
Route::apiResource('partners', PartnerController::class);
Route::apiResource('spouses', SpouseController::class);
Route::apiResource('family', FamilyController::class);
Route::apiResource('stand', StandController::class);
Route::apiResource('periodo', PeriodoController::class);
Route::apiResource('empadronamiento', EmpadronamientoController::class);
Route::apiResource('payment', PaymentController::class);
Route::apiResource('collection', CollectionController::class);
Route::apiResource('assistence', AssistenceController::class);
Route::apiResource('user', UserController::class);
Route::apiResource('activity', ActivityController::class);
Route::apiResource('post', PostController::class);
Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('refresh',[AuthController::class,'refresh']);
    Route::post('register',[AuthController::class,'register']);
    Route::get('me',[AuthController::class,'me']);
});
