<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::match(['get','post'],'/', function () {
    
    $services= DB::table('services')->get();

    return view('welcome',['services'=>$services]);
});


Route::match(['get','post'],'/service', function () {
    
    $services= DB::table('services')->get();

    return view('services.service',['services'=>$services]);
})->name('service');


Route::match(['get','post'],'/about', function () {
    

    return view('about.about');
})->name('about');


Route::match(['get','post'],'/contact', function () {
    
    return view('contact');
})->name('contact');

// Affichage du formulaire de contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact');

// Soumission du formulaire de contact
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact');




