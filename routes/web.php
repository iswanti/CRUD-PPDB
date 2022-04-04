<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaBaruController;

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

//route crud
Route::resource('/ppdb', SiswaBaruController::class);

//route export pdf
Route::get('/exportpdf', [SiswaBaruController::class, 'export'])->name('exportpdf');