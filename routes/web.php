<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
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

Route::get('/input', [InputController::class, 'index'])->name('input.index');
Route::post('/input', [InputController::class, 'submit'])->name('input.submit');
Route::post('/input/save', [InputController::class, 'save'])->name('input.save');



