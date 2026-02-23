<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::inertia('/', 'LandingPage')->name('landingPage');
Route::inertia('/about', 'About')->name('about');
