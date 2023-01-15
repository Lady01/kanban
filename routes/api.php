<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\TodoController;

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

Route::get('projects', [ProjectController::class, 'index']);
Route::get('projects/{id}', [ProjectController::class, 'show']);
Route::post('projects', [ProjectController::class, 'store']);
Route::put('projects/{id}', [ProjectController::class, 'update']);
Route::delete('projects/{id}', [ProjectController::class, 'delete']);

Route::get('phases', [PhaseController::class, 'index']);
Route::get('phases/{id}', [PhaseController::class, 'show']);
Route::post('phases', [PhaseController::class, 'store']);
Route::put('phases/{id}', [PhaseController::class, 'update']);
Route::delete('phases/{id}', [PhaseController::class, 'delete']);


Route::get('todos', [TodoController::class, 'index']);
Route::get('todos/{id}', [TodoController::class, 'show']);
Route::post('todos', [TodoController::class, 'store']);
Route::put('todos/{id}', [TodoController::class, 'update']);
Route::patch('todos', [TodoController::class,'updateOrderPhase']);
Route::delete('todos/{id}', [TodoController::class, 'delete']);
