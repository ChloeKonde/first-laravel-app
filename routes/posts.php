<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Posts\PostController;

Route::get("/createpost", [PostController::class, 'create'])
    ->name("createpost");

Route::post("/createpost", [PostController::class, 'store']);

Route::get('/showposts', function () {
    return view('posts.showposts', ['posts' => Post::all()]);
}) ->name('showposts');

Route::delete('/deletepost/{id}',[PostController::class, 'destroy'])
    ->name("deletepost");

Route::get('/editpost/{id}', [PostController::class, 'edit'])
    ->name('editpost');

Route::put('/updatepost/{id}', [PostController::class, 'update'])
    ->name("updatepost");

Route::get('/showallcomments/{id}', [PostController::class, 'showComments'])
    ->name('showallcomments');
