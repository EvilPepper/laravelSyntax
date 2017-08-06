<?php
Route::get('/', function () {
    $items  = ['apple', 'banana', 'tomato'];
    
    $items2 = [];

    return view('welcome', ['items' => $items, 'items2' => $items2]);
});
