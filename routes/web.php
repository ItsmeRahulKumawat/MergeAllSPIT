<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\OutreachController;
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
    
    Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal');;
    Route::get('/submitted', [ProposalController::class, 'submitted']);
    Route::post('/proposal', [ProposalController::class, 'store']);
    Route::get('/outreach', [OutreachController::class, 'index'])->name('outreach');
    Route::post('outreach', [OutreachController::class, 'store']);


});

// Route::get('/department',[DepartmentController::class,'index']);
// make protected routes that user can access
// admin
Route::prefix('admin')->name('admin.')->middleware(['auth','isAdmin'])->group(function () {

    
    Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal');
    Route::get('/proposal/{id}', [ProposalController::class, 'show']);
    Route::delete('/proposal/{id}', [ProposalController::class, 'destroy'])->name('proposal.remove');
    Route::get('/submitted', [ProposalController::class, 'submitted']);
    
    Route::get('/faculty', [FacultyController::class, 'index'])->name('faculty');
    Route::post('/faculty', [FacultyController::class, 'store']);
    Route::delete('/faculty/{id}', [FacultyController::class, 'destroy']);
    Route::put('/faculty/{id}', [FacultyController::class, 'update']);

    Route::get('/department',[DepartmentController::class,'index'])->name('department');
    Route::post('/department',[DepartmentController::class,'store']);
    Route::delete('/department/{id}', [DepartmentController::class, 'destroy']);
    Route::put('/department/{department_id}', [DepartmentController::class, 'update']);
    
    Route::get('/report',[ReportController::class,'index'])->name('report');;    
    Route::post('/report',[ReportController::class,'generateReport']);

    Route::get('/outreach',[OutreachController::class,'index'])->name('outreach');
    Route::post('outreach', [OutreachController::class, 'store']);
    Route::get('outreach/{id}',[OutreachController::class,'show']);

});

Route::get('/report',[ReportController::class,'index'])->name('report');;    
Route::post('/report',[ReportController::class,'generateReport']);
Route::get('/proposal/{id}', [ProposalController::class, 'show']);

Route::post('/getDept', [ProposalController::class, 'getDept']);

Route::get('outreach/{id}',[OutreachController::class,'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
