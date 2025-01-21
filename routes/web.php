<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/empresa', function(){
    return view('empresa');
});

Route::get('/servicios', function(){
    return view('servicios');
});

Route::get('/contacto', function(){
    return view('contact');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

                                    /* Rutas de header */



                                    /* Rutas de Administrador */  /* NO SE PUDO MODIFICAR EN EL ROUTESERVICEPROVIDER TODO SE HARA DESDE E WEB */

/*  Route::middleware(['auth'])->get('/admin',[HomeController::class, 'index'] );

Route::middleware(['auth'])->resource('categories', CategoryController::class)->names('admin.categories'); */
                                    