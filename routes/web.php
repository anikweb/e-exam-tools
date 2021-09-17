<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\GeneralSettingsController;
use App\Models\GeneralSettings;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Dashboard

Route::get('/',[BackendController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::resource('/dashboard/general-settings', GeneralSettingsController::class);
require __DIR__.'/auth.php';
