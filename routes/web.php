<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    echo "Halaman About";
});

Route::get('/mahasiswa', function () {
    echo "Halaman Mahasiswa";
});

Route::get('/user/{id}', function ($id) {
    echo 'User ID: ' . $id;
});

Route::get('/user/{name?}', function ($name = 'Happy') {
    echo 'Hello, ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    echo 'Post ID: ' . $postID . 'Comment ID: ' . $commentId;
});

Route::get('/user/{id}', function ($id) {
    echo 'User ID: ' . $id;
})->where('id', '[0-9]+');

Route::get('/about', function () {
    return view('about');
});

Route::get('/', [homeController::class, 'index']);
Route::get('/', [homeController::class, 'getName']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');