<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


// page route
Route::get('/page', [PageController::class,'getall'])->name('pages.index');
Route::get('/page/{id}', [PageController::class,'getbyid'])->name('pages.index-id');
Route::post('/page', [PageController::class,'add'])->name('pages.store');
Route::put('/page/update/{id}', [PageController::class,'update'])->name('pages.update');
Route::get('/page/{page}/edit', [PageController::class,'edit'])->name('pages.edit');
Route::delete('/delete/{id}', [PageController::class,'delete'])->name('pages.delete');