<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RemoteController;

Route::prefix('v1')->group(function() {
    Route::get('/', function() {
        return response()->json(['message' => 'Hello World!']);
    });

    Route::get('/remote', RemoteController::class);
});