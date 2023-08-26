<?php

use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource("roles", RoleController::class);
Route::resource("professors", ProfessorController::class);
Route::resource("students", StudentController::class);
Route::resource("courses", CourseController::class);
Route::resource("schedules", ScheduleController::class);
Route::resource("consultation_requests", ConsultationRequestController::class);
Route::resource("chat_rooms", ChatRoomController::class);