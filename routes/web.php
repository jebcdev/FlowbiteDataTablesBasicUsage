<?php

use App\Http\Controllers\_SiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [_SiteController::class, 'index'])->middleware(['auth'])->name('index');



require __DIR__.'/auth.php';
