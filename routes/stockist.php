<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('stockist')->user();

    //dd($users);

    return view('stockist.home');
})->name('home');

