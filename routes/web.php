<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\OutreachController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PublicationController;
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


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



Route::middleware(['auth', 'isUser'])->group(function () {

    // proposal submission for user
    Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal');
    ;
    Route::get('/submitted', [ProposalController::class, 'submitted']);
    Route::post('/proposal', [ProposalController::class, 'store']);

    // outreach submission for user
    Route::get('/outreach', [OutreachController::class, 'index'])->name('outreach');
    Route::post('outreach', [OutreachController::class, 'store']);


});

// Route::get('/department',[DepartmentController::class,'index']);
// make protected routes that user can access
// admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function () {

    // proposal submission
    Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal');
    ;
    Route::get('/submitted', [ProposalController::class, 'submitted']);
    Route::post('/proposal', [ProposalController::class, 'store']);

    // outreach submission
    Route::get('/outreach', [OutreachController::class, 'index'])->name('outreach');
    Route::post('outreach', [OutreachController::class, 'store']);


    // Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal');
    // proposal edit and delete from report
    Route::get('/proposal/{id}', [ProposalController::class, 'show']);
    Route::delete('/proposal/{id}', [ProposalController::class, 'destroy'])->name('proposal.remove');
    Route::post('/proposal/{id}/edit', [ProposalController::class, 'update'])->name('proposal.edit');
    ;
    Route::get('/proposal/{id}/edit', [ProposalController::class, 'showEditForm']);


    // outreach edit and delete from report
    Route::get('outreach/{id}', [OutreachController::class, 'show']);
    Route::delete('outreach/{id}', [OutreachController::class, 'destroy'])->name('outreach.remove');
    Route::post('outreach/{id}/edit', [OutreachController::class, 'update'])->name('outreach.edit');
    ;
    Route::get('outreach/{id}/edit', [OutreachController::class, 'showEditForm']);
    // Route::get('/submitted', [ProposalController::class, 'submitted']);


    // Faculty CRUD
    Route::get('/faculty', [FacultyController::class, 'index'])->name('faculty');
    Route::post('/faculty', [FacultyController::class, 'store']);
    Route::delete('/faculty/{id}', [FacultyController::class, 'destroy']);
    Route::put('/faculty/{id}', [FacultyController::class, 'update']);

    // Department CRUD
    Route::get('/department', [DepartmentController::class, 'index'])->name('department');
    Route::post('/department', [DepartmentController::class, 'store']);
    Route::delete('/department/{id}', [DepartmentController::class, 'destroy']);
    Route::put('/department/{department_id}', [DepartmentController::class, 'update']);

    // Report view and generate
    Route::get('/report', [ReportController::class, 'index'])->name('report');
    ;
    Route::post('/report', [ReportController::class, 'generateReport']);


    // Route::get('/outreach',[OutreachController::class,'index'])->name('outreach');
    // Route::post('outreach', [OutreachController::class, 'store']);



});


// report view and generate for anyone
Route::get('/report', [ReportController::class, 'index'])->name('report');
;
Route::post('/report', [ReportController::class, 'generateReport']);
Route::get('/proposal/{id}', [ProposalController::class, 'show']);
Route::get('outreach/{id}', [OutreachController::class, 'show']);
Route::post('/getDeptOutreach', [OutreachController::class, 'getDept']);
// get departments
Route::post('/getDept', [ProposalController::class, 'getDept']);

Route::get('aboutUs', function () {
    return view('about_us');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Publications Routes
Route::view('/publication_home', 'publication.pub_home')->name('pub_home');
Route::view('/facfilter', 'publication.facfilter')->name('facfilter');
Route::get('/facfilter', [PublicationController::class, 'datadriver']);
Route::post('/facultydata', [PublicationController::class, 'facultydata'])->name('facultyDataParser');
Route::view('/facultypub', 'publication.facultypub')->name('facultypub');