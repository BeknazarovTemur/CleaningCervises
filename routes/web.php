<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('service', [PageController::class, 'service'])->name('service');
Route::get('project', [PageController::class, 'project'])->name('project');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

