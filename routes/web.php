<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('Form');
})->name('show.form'); // Added a name to this route

Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');
Route::get('/success', function () {
    return view('success');
})->name('form.success'); // Added a route for the success page

