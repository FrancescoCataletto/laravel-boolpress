<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('index', 'Api\PageController@index');
Route::get('/{slug}', 'Api\PageController@show');
