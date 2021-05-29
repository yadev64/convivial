<?php

use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Login;
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

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::post('/createnewevent', 'Api\NewEventController@createNewEvent');
Route::post('/createnewticket', 'Api\NewTicketController@createNewTicket');

Route::get('/getsalesoverview', 'Api\ReportsController@getSalesOverview');
Route::get('/getsalesdetails', 'Api\ReportsController@getSalesDetails');
Route::get('/getbookingdetails', 'Api\ReportsController@getBookingDetails');
Route::get('/getbestseller', 'Api\ReportsController@getBestSellers');
