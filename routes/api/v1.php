<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\TaskController;
use App\Http\Controllers\Api\v1\CompleteTaskController;



Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});