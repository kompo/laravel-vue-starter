<?php

use App\Http\Komposers\KompoDemoForm;
use Illuminate\Support\Facades\Route;

// 1- Kompo rendered in view
Route::view('/', 'welcome');

// 2- Direct Route Call - rendered in a predefined layout
Route::layout('layouts.app')->group(function(){
	Route::get('kompo-in-layout', KompoDemoForm::class);

});

// 3- Direct Route Call - returned as JSON after AJAX call
Route::get('kompo-as-json', KompoDemoForm::class);
