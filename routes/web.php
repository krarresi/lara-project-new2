<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ApplicationController::class, 'index'])->name('index');

Route::get('/register', [AuthController::class, 'show_reg'])->name('show_reg');

Route::post('/register', [AuthController::class, 'signup'])->name('signup');

Route::get('/login', [AuthController::class, 'show_signin'])->name('show_signin');

Route::post('/login', [AuthController::class, 'signin'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');

Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');

Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
