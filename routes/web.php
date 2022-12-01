<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ReportController;
use App\Models\Faculty;
use App\Models\Proposal;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('homepage');
});


Route::get('/login',function(){
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});



Route::middleware(['auth','isUser'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/proposal', [ProposalController::class, 'index']);
    Route::get('/proposal_submitted', [ProposalController::class, 'submitted']);

});
// make protected routes that user can access
// admin
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/proposal', [ProposalController::class, 'index']);
    Route::get('/proposal_submitted', [ProposalController::class, 'submitted']);
    
    Route::get('/faculty', [FacultyController::class, 'index']);
    Route::post('/faculty', [FacultyController::class, 'store']);
    Route::post('/removeFaculty/{id}', [FacultyController::class, 'destroy']);
    Route::post('/updateFaculty/{id}',[FacultyController::class,'update']);

    Route::get('/department',[DepartmentController::class,'index']);
    Route::post('/department',[DepartmentController::class,'store']);
    Route::delete('/department/{id}', [DepartmentController::class, 'destroy']);
    Route::put('/department/{department_id}', [DepartmentController::class, 'update']);
    
    Route::get('/report',[ReportController::class,'index']);    
    Route::post('/report',[ReportController::class,'generateReport']);
});

Route::post('/proposal', [ProposalController::class, 'store']);
Route::get('/proposal/{id}', [ProposalController::class, 'show']);
Route::post('/getDept', [ProposalController::class, 'getDept']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
