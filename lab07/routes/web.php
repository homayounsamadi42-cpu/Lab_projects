
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookControler;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');


Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    Route::view('/login', 'auth.login')->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
    Route::get('/books',function (){
        return view('books');
    })->name('books.show');
    Route::post('/books',[BookControler::class , 'store'])->name('books.store');
    
});
