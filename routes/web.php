<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/courses', [PageController::class, 'courses'])->name('courseList');
Route::get('/courses/{slug}', [PageController::class, 'courseDetail'])->name('courseDetail');

Route::get('/products', [PageController::class, 'products'])->name('productList');
Route::get('/products/{slug}', [PageController::class, 'productDetail'])->name('productDetail');

Route::get('/programs', [PageController::class, 'programs'])->name('programList');
Route::get('/programs/{slug}', [PageController::class, 'programDetail'])->name('programDetail');

Route::get('/tryouts', [PageController::class, 'tryouts'])->name('tryoutList');

Route::get('/articles', [PageController::class, 'articles'])->name('articleList');
Route::get('/articles/{id}', [PageController::class, 'articleDetail'])->name('articleDetail');

Route::get('/achievements', [PageController::class, 'achievements'])->name('achievementList');

Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
