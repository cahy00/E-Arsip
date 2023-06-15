<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TypeDocumentController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/documents/create', [DocumentController::class, 'create'])->name('document.create');
Route::get('/documents', [DocumentController::class, 'index'])->name('document.index');
Route::post('/documents', [DocumentController::class, 'store'])->name('document.store');

Route::get('/typedocuments', [TypeDocumentController::class, 'index'])->name('typedocument.index');
Route::get('/typedocuments/create', [TypeDocumentController::class, 'create'])->name('document.create');
Route::post('/typedocuments/store', [TypeDocumentController::class, 'store'])->name('document.store');


Route::get('/test', function () {
	return view('layouts._layout');
});
