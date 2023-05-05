<?php

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SectorController;
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



//Route::resource('evaluation',EvaluationController::class);

//Route::resource('/evaluation', EvaluationController::class)
//    ->only(['index'. 'create'. 'store']);
//
//Route::get('/sector/create', [SectionController::class, 'create']);
//
//
Route::get('/', function () {
    return view('index');
});

Route::resource('/evaluation', EvaluationController::class);

Route::resource('/sector', SectorController::class);






