<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\TagController;




Route::get('', [HomeController::class, 'index'])->name('admin.home');




Route::resource('categories', CategoryController::class)->names('admin.categories');


route::resource('tags', TagController::class)->names('admin.tags');

route::resource('posts', PostController::class)->names('admin.posts');



