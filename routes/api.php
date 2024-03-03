<?php

use App\Http\Controllers\Api\V1\Admin\GlobalSearchController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Branch
    Route::apiResource('branches', 'BranchApiController');
});

Route::get("search", [GlobalSearchController::class, "search"]);
