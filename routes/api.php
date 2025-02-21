<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Fetch all projects
Route::get('/projects', [ProjectController::class, 'index']);

// Fetch a single project by ID
Route::get('/projects/{id}', [ProjectController::class, 'show']);
