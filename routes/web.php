<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DownloadArchiveController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->group(function () {
    Route::resource('/archive', ArchiveController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/user', UserController::class);
    Route::get('/downloads/{slug}', [DownloadArchiveController::class, 'downloadArchive'])->name('downloads.archive');
});


Route::post('/login', [AuthController::class, 'authenticate'])->name('post-login');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'registration'])->name('register');

Route::get('/dashboard', function(){
    return view('archive.index', [
        'title' => 'Dashboard'
    ]);
});
