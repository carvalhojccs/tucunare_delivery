<?php

use App\Http\Controllers\Admin\Plans\{
    CreatePlanController,
    DestroyPlanController,
    IndexPlanController,
    SearchPlanController,
    ShowPlanController,
    StorePlanController,
    EditPlanController,
    UpdatePlanController
};
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('admin')->group(function(){
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
