<?php

use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ReportController;

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

Route::get('/report',function(){
    return view('report');
});

Route::get('/proposal',function(){
    return view('proposal');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/proposal_submitted',function(){
    return view('proposal_submitted');
});
Route::get('/addFaculty',function(){
    return view('addFaculty');
});

Route::post('/generateReport',[ReportController::class,'generateReport']);

// Route::get('/proposal', [ProposalController::class, 'index']);
Route::post('/proposal', [ProposalController::class, 'store']);

Route::post('/getDept', [ProposalController::class, 'getDept']);

Route::post('/addFaculty', [FacultyController::class, 'store']);

Route::post('/removeFaculty/{id}', [FacultyController::class, 'destroy']);