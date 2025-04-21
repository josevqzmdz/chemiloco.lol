<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'show'])->name('english');

Route::get('/spanish', [Controller::class, 'spanish'])->name('spanish');
Route::get('/french', [Controller::class, 'french'])->name('french');
Route::get('/portuguese', [Controller::class, 'portuguese'])->name('portuguese');
//Route::get('/english', [Controller::class, 'english'])->name('english');
