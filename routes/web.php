<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScorecardController;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('pdf', [ScorecardController::class, 'index']);
// Route::get('/', function () {
//     return view('welcome');
// });

// landingpage
Route::get('/',function(){
    return view('landingpage');
})->name('home');

//test filename
Route::get('/filename-tester', function(){
    $filename = time().'.'.'pdf';
    dd($filename);
});

// blog
Route::get('/artikel-test', function(){
    return view('blogdetail');
})->name('blog-detail');
// scorecard
Route::get('scorecard', [ScorecardController::class, 'scorecardForm'])->name('scorecard');
Route::post('store-scorecard',[ScorecardController::class, 'storeScorecard'])->name('store_scorecard');
Route::post('generated-pdf',[ScorecardController::class, 'generatePDF'])->name('generated_pdf');

// admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/scorecard', [ScorecardController::class, 'index'])->name('scorecard.index');
    Route::get('/admin/scorecard-list', [ScorecardController::class, 'scoreList'])->name('scorecard.list');
    Route::get('/admin/download', [ScorecardController::class, 'download'])->name('download');
});

require __DIR__.'/auth.php';
