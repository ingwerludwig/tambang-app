<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KantorController;
use App\Http\Controllers\TambangController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ExportDataController;
use App\Http\Controllers\ApproveOrderController;
use App\Http\Controllers\ServiceHistoryController;

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
Route::get('/', function () {
    return response()->json([
        'status' => 'OK'
    ], 200);
});

Route::post('driver/create', [DriverController::class, 'createDriver']);

Route::post('servicehistory/create',[ServiceHistoryController::class, 'createReport']);

Route::post('kantor/create', [KantorController::class, 'createKantor']);

Route::post('tambang/create', [TambangController::class, 'createTambang']);

Route::post('kendaraan/create', [KendaraanController::class, 'createKendaraan']);

Route::post('order/create', [OrderController::class, 'createOrder']);
Route::patch('order/approve',[OrderController::class, 'approveOrder']);

Route::post('user/create', [UserController::class, 'createUser']);

Route::get('dataexport', [ExportDataController::class, 'exportData']);

// Route::get('/token', function () {
//     return csrf_token();
// });
