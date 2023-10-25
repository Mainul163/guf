<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GufInsertController;
use App\Http\Controllers\PdfController;
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
    $district=DB::table('geo_set_district')->get();
    $division=DB::table('geo_set_division')->get();
    $thana=DB::table('geo_set_thana')->get();
    return view('welcome',compact('district','division','thana'));
});
Route::post('/guf/store', [App\Http\Controllers\GufInsertController::class, 'store'])->name('gufInfo');
Route::get('/guf/index', [App\Http\Controllers\GufInsertController::class, 'index'])->name('guf');
Route::get('/guf/pdf', [App\Http\Controllers\PdfController::class, 'export_pdf'])->name('pdfDownload');