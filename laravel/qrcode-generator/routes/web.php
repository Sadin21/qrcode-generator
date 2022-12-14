<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Generator;
use App\Http\Controllers\BarcodeController;


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
//     $qrcode = new Generator;
//     $qr = $qrcode->size(500)->generate('Make a qrcode without Laravel!');
//     return view('welcome', compact('qr'));
// });

Route::get('/', [BarcodeController::class, 'index'])->name('index');
Route::get('/create', [BarcodeController::class, 'create'])->name('create');
Route::post('/store', [BarcodeController::class, 'store'])->name('store');
