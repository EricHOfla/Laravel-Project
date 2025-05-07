<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;


Route::get('/', [SiteController::class, 'hhh'])->name('homepage');
Route::get('/login', [LoginController::class, 'ShowLogin'])->name('loginpage');
Route::get('/about', [SiteController::class, 'ShowAbout'])->name('aboutpage');

Route::get('/contact', [SiteController::class, 'ShowContact'])->name('contactpage');
Route::post('/', [SiteController::class, 'ContactStore'])->name('contact.store');

Route::get('/all', [LoginController::class, 'ShowAllData'])->name('select.data');

Route::post('/deletedata/{id}', [LoginController::class, 'Delete'])->name('delete');

Route::get('/edit/{id}', [LoginController::class, 'Edit'])->name('data.edit');
Route::put('/update/{id}', [LoginController::class, 'Update'])->name('update.data');

Route::get('/register', [LoginController::class, 'ShowRegister'])->name('registerpage');
Route::post('/register', [LoginController::class, 'RegisterStore'])->name('register.store');

Route::post('/login', [LoginController::class, 'Login'])->name('logincheck');

Route::get('/data', [LoginController::class, 'AllData'])->name('data.all');

Route::post('/logout', [LoginController::class, 'Logout'])->name('logout');
