<?php

use App\Http\Controllers\Admin\BlancosController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('blancos', [BlancosController::class,'index'])->name('admin.blancos');

Route::get('blancos/registro', [BlancosController::class,'registro'])->name('admin.blancos.registro');

Route::get('blancos/entrada', [BlancosController::class,'entrada'])->name('admin.blancos.entrada');

Route::get('blancos/salida', [BlancosController::class,'salida'])->name('admin.blancos.salida');

