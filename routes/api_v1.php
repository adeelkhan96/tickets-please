<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Enjoy building your API!
|
*/
//ticket routes
//http://localhost:8000/api/v1/tickets
Route::middleware('auth:sanctum')->apiResource('tickets', TicketController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
