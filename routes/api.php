<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json('hello');
});

Route::get('v1/posts', [PostController::class, 'index']);

Route::post('v1/posts', [PostController::class, 'store']);

Route::get('v1/posts/{post}', [PostController::class, 'show']);

Route::put('v1/posts/{post}', [PostController::class, 'update']);

Route::delete('v1/posts/{post}', [PostController::class, 'destroy']);

