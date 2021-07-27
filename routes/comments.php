<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get("/createcomment/{id}", [CommentController::class, 'create'])
->name('createcomment');

Route::post("/createcomment/", [CommentController::class, 'store'])
->name('storecomment');
