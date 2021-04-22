<?php

use Illuminate\Support\Facades\Route;
use Leo\Hello\HelloController;

Route::get('/hello', [HelloController::class, 'hello'])->name('hello');