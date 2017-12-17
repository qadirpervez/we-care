<?php

Route::get('/', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('stockist')->user();

    //dd($users);

    return view('stockist.dashboard.index');
})->name('dashboard');
