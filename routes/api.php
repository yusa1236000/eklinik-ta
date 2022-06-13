<?php

use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\API\DoctorController;
use App\Http\Controllers\API\DrugController;
use App\Http\Controllers\API\LabController;
use App\Http\Controllers\API\RoomController;
use App\Http\Controllers\API\DiagnosisController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\QueueController;
use App\Http\Controllers\API\ImmunizationController;
use App\Http\Controllers\API\FamilyplanningController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROUTE WEB SERVICE//

Route::resource('patient', PatientController::class)->middleware('auth:sanctum');
Route::resource('doctors', DoctorController::class)->middleware('auth:sanctum');
Route::resource('drugs', DrugController::class)->middleware('auth:sanctum');
Route::resource('lab', LabController::class)->middleware('auth:sanctum');
Route::resource('room', RoomController::class)->middleware('auth:sanctum');
Route::resource('diagnosis', DiagnosisController::class)->middleware('auth:sanctum');
Route::resource('service', ServiceController::class)->middleware('auth:sanctum');
Route::resource('antrian', QueueController::class)->middleware('auth:sanctum');
Route::resource('immunization', ImmunizationController::class)->middleware('auth:sanctum');
Route::resource('familyplanning',FamilyplanningController::class)->middleware('auth:sanctum');

//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);
//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});

// // Route Swagger
// Route::get('/home', [HomeController::class, 'index']);