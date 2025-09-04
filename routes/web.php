<?php

use App\Models\LifeHack;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $hacks = LifeHack::all();
    return view('hacks', compact('hacks'));
});

