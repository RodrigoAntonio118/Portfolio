<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index');
});


// Ruta para procesar el formulario de contacto
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');