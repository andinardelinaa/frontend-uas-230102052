<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KajurController;




Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('user', UserController::class);
Route::get('/user/pdf', [UserController::class, 'exportPDF'])->name('user.pdf');
Route::get('/test-cetak-user', function () {
    $datas = [
        ['id_user' => 1, 'username' => 'andi', 'password' => '123', 'level' => 'admin'],
        ['id_user' => 2, 'username' => 'budi', 'password' => '456', 'level' => 'user'],
    ];
    return view('cetak_user', compact('datas'));
});


Route::resource('kajur', KelasController::class)->parameters([
    'kajur' => 'id_kajur'
]);
