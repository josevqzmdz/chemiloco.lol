<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'show'])->name('routeEnglish');
Route::get('/english', [Controller::class, 'showEnglish'])->name('English');
Route::get('/french', [Controller::class, 'showFrench'])->name('French');
Route::get('/spanish', [Controller::class, 'showSpanish'])->name('Spanish');
Route::get('/portuguese', [Controller::class, 'showPortuguese'])->name('Portuguese');