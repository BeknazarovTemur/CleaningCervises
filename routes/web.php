<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\
{
    AuthController,
    CommentController,
    PostController,
    PageController
};
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'main')->name('main');
    Route::get('about', 'about')->name('about');
    Route::get('service', 'service')->name('service');
    Route::get('project', 'project')->name('project');
    Route::get('contact', 'contact')->name('contact');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('authenticate',  'authenticate')->name('authenticate');
    Route::post('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'register_store')->name('register_store');
});

Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
]);

