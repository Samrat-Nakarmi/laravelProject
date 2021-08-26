<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{first}/{second}', function ($firstNo, $secondNo){
    $product = $firstNo * $secondNo;
    return view('demo', ['firstNo' => $firstNo, 'secondNo' => $secondNo, 'product' => $product]);
});

Route::get('/replace/{firstWord}/{finalWord}', function($firstWord, $finalWord){
    $sentence = "Hello World. I greet everyone by saying Hello.";
    $finalSentence = str_replace($firstWord, $finalWord, $sentence);

    return view('demo', ['firstWord' => $firstWord, 'finalWord' => $finalWord, 'finalSentence' => $finalSentence, 'sentence' => $sentence]);
});

Route::get('/form', [FormController::class,'create'])->name('register-form'); 

Route::post('/form', [FormController::class,'store'])->name('register');