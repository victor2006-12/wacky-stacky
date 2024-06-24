<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminMenuItemsController;




// Example Routes Admin
Route::prefix('admin')
    //->middleware(['auth'])
    ->as('admin.')
    ->group(function () {
        

    });

Route::get('/', function () {
    return view('welcome');
});


Route::get('/site', function () {
    return view('site');
});


Route::get('/home', function () {
    return view('site');
});


Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/AdminIndex', [AdminIndexController::class, 'index'])->name('Index') ->middleware('auth');  
Route::get('/AdminMenu', [AdminMenuController::class, 'Menu'])->name('Menu') ->middleware('auth');  
Route::get('/AdminContact', [AdminContactController::class, 'Contact'])->name('Contact') ->middleware('auth');  

Route::get('/menuitems/{id}', [AdminMenuItemsController::class, 'edit'])->name('menuitems.edit') ->middleware('auth');  
Route::put('/menuitems/{id}', [AdminMenuItemsController::class, 'update'])->name('menuitems.update') ->middleware('auth');


Route::get('/menu', [MenuController::class, 'index'])->name('menu');
