<?php

use App\Http\Controllers\Admin\Plan\{
    CreatePlanController,
    DestroyPlanController,
    IndexPlanController,
    SearchPlanController,
    ShowPlanController,
    StorePlanController,
    EditPlanController,   
    UpdatePlanController
};
use App\Http\Controllers\Admin\Plan\Detail\{
    CreatePlanDetailController,
    DestroyPlanDetailController,
    EditPlanDetailController,
    IndexPlanDetailController,
    ShowPlanDetailController,
    StorePlanDetailController,
    UpdatePlanDetailController
};
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('admin')->group(function(){
        /** Plan detail management */
        Route::get('/plans/{id}/details', IndexPlanDetailController::class)->name('plans.details.index');
        Route::post('/plans/{id}/details', StorePlanDetailController::class)->name('plans.details.store');
        Route::get('/plans/{id}/details/create', CreatePlanDetailController::class)->name('plans.details.create');
        Route::get('/plans/{id}/details/{detail_id}', ShowPlanDetailController::class)->name('plans.details.show');
        Route::put('/plans/{id}/details/{detail_id}', UpdatePlanDetailController::class)->name('plans.details.update');
        Route::delete('/plans/{id}/details/{detail_id}', DestroyPlanDetailController::class)->name('plans.details.destroy');
        Route::get('/plans/{id}/details/{detail_id}/edit', EditPlanDetailController::class)->name('plans.details.edit');

        /** Plans management */
        Route::get('/plans', IndexPlanController::class)->name('plans.index');
        Route::post('/plans', StorePlanController::class)->name('plans.store');
        Route::get('/plans/create', CreatePlanController::class)->name('plans.create');
        Route::get('/plans/{url}', ShowPlanController::class)->name('plans.show');
        Route::put('/plans/{url}', UpdatePlanController::class)->name('plans.update');
        Route::delete('/plans/{url}', DestroyPlanController::class)->name('plans.destroy');
        Route::get('/plans/{url}/edit', EditPlanController::class)->name('plans.edit');
        Route::any('/plans/search', SearchPlanController::class)->name('plans.search');
    });
    
    

    Route::fallback(function() {
        return view('pages.utility.404');
    });
});
