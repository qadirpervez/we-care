<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('reseller')->user();

    //dd($users);

    return view('reseller.home');
})->name('home');

