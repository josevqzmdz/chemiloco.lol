<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'english']);
Route::get('/spanish', [Controller::class, 'spanish']);
Route::get('/french', [Controller::class, 'french']);
Route::get('/portuguese', [Controller::class, 'portuguese']);
Route::get('/english', [Controller::class, 'english']);
