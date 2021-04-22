<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SignaturePadController;

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

Route::get('/', [Controller::class, 'welcome'])->name('welcome');
Route::get('/articoli', [ArticleController::class, 'articles'])->name('articles');
Route::get('/articolo/{article}', [ArticleController::class, 'article'])->name('article');
Route::get('/modifica/{article}', [ArticleController::class, 'modify'])->name('modify');


Route::get('/signaturepad', [SignaturePadController::class, 'index']);
Route::post('/signaturepad', [SignaturePadController::class, 'upload'])->name('signaturepad.upload');

Route::get('/taverna', [Controller::class, 'index'])->name('index');




//pdf
Route::get('/p', [Controller::class, 'pdf'])->name('pdf');
Route::get('/download-pdf', [Controller::class, 'downloadPdf'])->name('download-pdf');

