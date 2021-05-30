<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;


Route::apiResource('/',TweetController::class);


