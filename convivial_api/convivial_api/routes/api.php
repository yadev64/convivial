<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\EventDataController;
use App\Http\Controllers\Api\NewEventController;
use App\Http\Controllers\Api\NewTicketController;
use App\Http\Controllers\Api\ReportsController;
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

Route::get('/', function(){
    return;
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/me', [AuthController::class, 'me']);
    Route::get('/getsalesoverview', 'Api\ReportsController@getSalesOverview');
    Route::get('/getsalesdetails', 'Api\ReportsController@getSalesDetails');
    Route::get('/getbookingdetails', 'Api\ReportsController@getBookingDetails');
    Route::get('/getbestsellers', 'Api\ReportsController@getBestSellers');

    Route::get('/gettrendingevents', 'Api\EventDataController@getTrendingEvents');
    Route::get('/geteventdata/{id}', 'Api\EventDataController@getEventData');
    Route::get('/getsportsevents', 'Api\EventDataController@getSportsEvents');
    Route::get('/getfunevents', 'Api\EventDataController@getFunEvents');

});

// Route::post('/me', [AuthController::class, 'me']);

// Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

// Route::post('/createnewevent', [NewEventController::class, 'createNewEvent'])->middleware('auth:sanctum');
// Route::post('/createnewticket', [NewTicketController::class, 'createnewticket'])->middleware('auth:sanctum');

// Route::get('/getsalesoverview', [ReportsController::class, 'getSalesOverview'])->middleware('auth:sanctum');
// Route::get('/getsalesdetails', [ReportsController::class, 'getSalesDetails'])->middleware('auth:sanctum');
// Route::get('/getbookingdetails', [ReportsController::class, 'getBookingDetails'])->middleware('auth:sanctum');
// Route::get('/getbestseller', [ReportsController::class, 'getBestSellers'])->middleware('auth:sanctum');

// // Route::get('/gettrendingevents', [EventDataController::class, 'getTrendingEvents'])->middleware('auth:sanctum');
// Route::get('/geteventdata/{id}', [EventDataController::class, 'getEventData'])->middleware('auth:sanctum');
// Route::get('/getsportsevents', [EventDataController::class, 'getSportsEvents'])->middleware('auth:sanctum');
// Route::get('/getfunevents', [EventDataController::class, 'getFunEvents'])->middleware('auth:sanctum');




Route::post('/createnewevent', 'Api\NewEventController@createNewEvent');
Route::post('/createnewticket', 'Api\NewTicketController@createNewTicket');

// Route::get('/getsalesoverview', 'Api\ReportsController@getSalesOverview');
// Route::get('/getsalesdetails', 'Api\ReportsController@getSalesDetails');
// Route::get('/getbookingdetails', 'Api\ReportsController@getBookingDetails');
// Route::get('/getbestsellers', 'Api\ReportsController@getBestSellers');

// Route::get('/gettrendingevents', 'Api\EventDataController@getTrendingEvents');
// Route::get('/geteventdata/{id}', 'Api\EventDataController@getEventData');
// Route::get('/getsportsevents', 'Api\EventDataController@getSportsEvents');
// Route::get('/getfunevents', 'Api\EventDataController@getFunEvents');
