<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KpController;

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

//ambil semua data
Route::get('/kps', [KpController::class, 'index']);

//tambah data baru
Route::post('kps/tambah-data', [KpController::class, 'store']);

//generate token csrf
Route::get('generate-token', [KpController::class, 'createToken']);

//untuk menampilkan data yg sudah di hapus sementara oleh softdelete
Route::get('/kps/show/traimage.pngsh', [KpController::class, 'trash']);

//ambil satu data spesifik
Route::get('/kps/{id}', [KpController::class, 'show']);

//mengubah data tertentu
Route::patch('/kps/update/{id}', [KpController::class, 'update']);

//menghapus data tertentu
Route::delete('/kps/delete/{id}', [KpController::class, 'destroy']);

//mengembalikan data spesifik yang sudah di hapus
Route::get('kps/trash/restore/{id}', [KpController::class, 'restore']);

//menghapus permanen data tertentu 
Route::get('/kps/trash/delete/permanent/{id}', [KpController::class, 'permanentDelete']);