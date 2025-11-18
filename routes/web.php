<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('form-r');
});

Route::get('/pdf-view', [ResumeController::class, 'generatePdfResume']);
Route::get('/see-preview', [ResumeController::class, 'seePreview']);
Route::get('/form-r' ,function () { return view('pages.resume-form'); })->name('form-r');

Route::post('/store-form', [ResumeController::class, 'store'])->name('form-store');
Route::post('/download-form', [ResumeController::class, 'download'])->name('form-download');
