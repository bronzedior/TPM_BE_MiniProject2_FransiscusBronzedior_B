<?php

use App\Http\Controllers\ConsultantController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConsultantController::class, 'welcome'])->name('welcome');

Route::get('/seed-clients', [ConsultantController::class, 'seedClients'])->name('seedClients');

Route::post('/store', [ConsultantController::class,'store'])->name('store');

Route::get('/insert', [ConsultantController::class, 'addConsultant'])->name('addConsultant');

Route::get('/edit/{id}', [ConsultantController::class, 'editConsultant'])->name('editConsultant');

Route::put('/update/{id}', [ConsultantController::class, 'updateConsultant'] )->name('updateConsultant');

Route::delete('/delete/{id}', [ConsultantController::class,'deleteConsultant'])->name('deleteConsultant');
