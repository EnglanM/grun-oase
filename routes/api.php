<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/api/contacts', 'ContactController@index');
Route::post('contacts', 'ContactController@store');
