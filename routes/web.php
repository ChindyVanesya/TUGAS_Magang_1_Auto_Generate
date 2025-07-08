<?php

use App\Http\Controllers\generate;
use App\Http\Controllers\KodeController;
use App\Http\Controllers\QRCodeController;
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
Route::get('/hasil', function () {
    return view('qrcode');   
});

//     return view('qrcode');   
// });
Route::redirect('/', '/generate');

Route::get('/generate',[KodeController::class, 'index' ]);
Route::get('/view/pdf',[KodeController::class, 'view_pdf' ]);
Route::post('/generate',[KodeController::class, 'generate' ]);