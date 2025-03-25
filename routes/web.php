<?php

use App\Livewire\Auth\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);

Route::get('/clientes', function () {
    return Auth::user();
})->middleware('auth', 'role:cliente')->name('cliente.dashboard');
