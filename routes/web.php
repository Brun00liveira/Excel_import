<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\{
    ShowProperties,
    Counter
};

Route::get('properties', ShowProperties::class);

Route::get('count', Counter::class);

Route::get('/', function () {
    return view('welcome');
});
