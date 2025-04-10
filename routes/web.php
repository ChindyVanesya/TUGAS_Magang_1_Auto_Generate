<?php

use App\Http\Controllers\generate;
use App\Http\Controllers\KodeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hasil', function () {
    return view('qrcode');   
});


Route::get('/generate',[KodeController::class, 'index' ]);
// Route::get('/kode',[KodeController::class, 'index' ]);
Route::post('/generate',[KodeController::class, 'generate' ]);