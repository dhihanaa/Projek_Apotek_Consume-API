<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekController;

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


Route::get('/apotek', [ApotekController::class, 'index']);
Route::get('/apotek/create', [ApotekController::class, 'create']);
Route::post('/apotek/store', [ApotekController::class, 'store']);
Route::get('/apotek/{id}', [ApotekController::class, 'show']);
Route::get('/apotek/edit/{id}', [ApotekController::class, 'edit']);
Route::patch('/apotek/update/{id}', [ApotekController::class, 'update']);
Route::delete('/apotek/delete/{id}', [ApotekController::class, 'destroy']);
Route::get('/apotek/trash/all', [ApotekController::class, 'trash']);
Route::get('/apotek/trash/restore/{id}', [ApotekController::class, 'restore']);
Route::get('/apotek/trash/permanent/{id}', [ApotekController::class, 'permanentDelete']);