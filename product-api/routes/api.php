<?php

use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth.apikey')->prefix('v1')->group(function () {
    Route::apiResource('/products', ProductController::class);
});
