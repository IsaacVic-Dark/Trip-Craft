<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MpesaController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plan', [HomeController::class, 'plan'])->name('page.plan');

Route::get('/review', [HomeController::class, 'review'])->name('page.review');

Route::get('/detailed_activity', [HomeController::class, 'detailed_activity'])->name('page.detailed_activity');

// Route::get('/weather/{location}', [WeatherController::class, 'show']);

Route::get('/activities', [HomeController::class, 'activities'])->name('page.activities');

Route::get('/pay', [HomeController::class, 'pay'])->name('page.payment');

Route::post('/makePayment', [MpesaController::class, 'initiatePayment']);

Route::get('/search', [HomeController::class, 'search'])->name('search');

// Post Activity to Database
Route::post('/add', [HomeController::class, 'trip'])->name('pages.add');


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/home',[HomeController::class, 'homePage'])->middleware('auth')->name('home');

Route::get('/admin/users/{id}', [HomeController::class, 'getUserDetails']);


Route::post('/admin/users/create', [HomeController::class, 'storeUser'])->name('admin.users.store');

Route::patch('/admin/users/update', [HomeController::class, 'updateUser'])->name('admin.users.update');

// Post Review
Route::post('/save-review', [HomeController::class, 'saveReview'])->name('save-review');


Route::get('/export1', [ExportController::class, 'exportToCSVTable1'])->name('export1.csv');
Route::get('/export2', [ExportController::class, 'exportToCSVTable2'])->name('export2.csv');

Route::get('/payment', function(){
    return view('pages.payment');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::delete('/profile', [ProfileController::class, 'destroyUserAdmin'])->name('profile.destroyUserAdmin');
});

require __DIR__.'/auth.php';
