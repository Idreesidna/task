<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerA;
use App\Http\Controllers\ControllerB;

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


         /*  Routes For Controller B  */
// This route get data from ControllerA and Employees Table
Route::get("employees",[ControllerA::class,'employees']);

// This route get data from ControllerA and users Table
Route::get("users",[ControllerA::class,'users']);



         /*  Routes For Controller B  */
// This route get data from ControllerB and employees Table
Route::get("getemp",[ControllerB::class,'employees']);

// This route get data from ControllerB and users Table
Route::get("getusers",[ControllerB::class,'users']);

