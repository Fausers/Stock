<?php
use App\Http\Controllers\CallHome\AssetsController;
use Illuminate\Support\Facades\Route;

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    Route::prefix('my_assets')->group(function(){
        Route::get('/', [AssetsController::class, 'index'])->name('my_assets');
        Route::get('/types', [AssetsController::class, 'assetTypes'])->name('types');
        Route::post('/types/add_request', [AssetsController::class, 'addAssetType'])->name('add_request');
        Route::post('/types/add_asset', [AssetsController::class, 'addAsset'])->name('add_asset');
        Route::get('/print', [AssetsController::class, 'printCheck'])->name('print');
    });
});
