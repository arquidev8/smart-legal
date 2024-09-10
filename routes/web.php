<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');


Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('portfolio');
    });
});