<?php

use App\Http\Controllers\QuranController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('quran',[QuranController::class, 'index'])->name('quran');
Route::get('/',[QuranController::class,'index'])->name('/');
Route::get('/surah/{nomor}',[QuranController::class, 'show'])->name('surah.show');
