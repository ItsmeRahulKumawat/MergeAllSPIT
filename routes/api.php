<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProposalController;
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


// Route::get('/proposal', [ProposalController::class, 'index']);

Route::middleware(['auth','isAdmin'])->group(function () {
    
    Route::post('/department',[DepartmentController::class,'store']);
    Route::post('/proposal', [ProposalController::class, 'store']);
    
    Route::post('/getDept', [ProposalController::class, 'getDept']);
    
    
    Route::post('/removeFaculty/{id}', [FacultyController::class, 'destroy']);
    
    
    Route::post('/report', [FacultyController::class, 'generateReport']);
    
    Route::get('/proposal/{id}', [ProposalController::class, 'show']);
    
    Route::post('/updateFaculty/{id}',[FacultyController::class,'update']);
    
    Route::delete('/department/{id}', [DepartmentController::class, 'destroy']);
    
    Route::put('/department/{department_id}', [DepartmentController::class, 'update']);

});
