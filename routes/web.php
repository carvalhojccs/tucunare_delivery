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

    /** Plans management */
    Route::get('/admin/plans', IndexPlanController::class)->name('plans.index');
    Route::post('admin/plans', StorePlanController::class)->name('plans.store');
    Route::get('/admin/plans/create', CreatePlanController::class)->name('plans.create');
    Route::get('/admin/plans/{url}', ShowPlanController::class)->name('plans.show');
    Route::put('/admin/plans/{url}', UpdatePlanController::class)->name('plans.update');
    Route::delete('/admin/plans/{url}', DestroyPlanController::class)->name('plans.destroy');
    Route::get('/admin/plans/{url}/edit', EditPlanController::class)->name('plans.edit');
    Route::any('admin/plans/search', SearchPlanController::class)->name('plans.search');

    Route::fallback(function() {
        return view('pages.utility.404');
    });
});
