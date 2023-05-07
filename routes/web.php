<?php

use App\Http\Controllers\Admin\Plans\{
    CreatePlanController,
    IndexPlanController,
    ShowPlanController,
    StorePlanController
};
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    /** Plans management */
    Route::get('/admin/plans/create', CreatePlanController::class)->name('plans.create');
    Route::get('admin/plans/{url}', ShowPlanController::class)->name('plans.show');
    Route::get('/admin/plans', IndexPlanController::class)->name('plans.index');
    Route::post('admin/plans/create', StorePlanController::class)->name('plans.store');

    Route::fallback(function() {
        return view('pages.utility.404');
    });
});
