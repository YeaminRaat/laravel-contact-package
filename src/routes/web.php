<?php

use Illuminate\Support\Facades\Route;

Route::get('contact', [\Yeamin\Contact\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('contact', [\Yeamin\Contact\Http\Controllers\ContactController::class, 'submit']);