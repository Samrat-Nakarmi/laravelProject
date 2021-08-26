<?php

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

Route::get('/optional/{para?}', function($para = null){
    return view('demo', ['para' => $para]);
}); 

Route::get('/form/{para?}', function($para = null){
    return view('demo', ['para'=>$para]);
});