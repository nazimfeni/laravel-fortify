<?php

use App\Http\Controllers\AccountDeletionController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('dashboard',DashboardController::class)->name('dashboard');

Route::get('auth/password', PasswordController::class)->name('auth.password');

Route::get('account-delete',[AccountDeletionController::class, 'index'])->name('account.delete');
Route::post('account-delete',[AccountDeletionController::class,'destroy']);