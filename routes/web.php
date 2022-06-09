<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/event/{id}', [PageController::class, 'event'])->name('event');
Route::get('/announcer/{id}', [PageController::class, 'announcer'])->name('announcer');
Route::get('/announcers', [PageController::class, 'announcers'])->name('announcers');
Route::get('/category/{id}', [PageController::class, 'category'])->name('category');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
