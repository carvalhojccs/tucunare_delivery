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
use App\Http\Controllers\Admin\Profile\{
    CreateProfileController,
    DestroyProfileController,
    EditProfileController,
    IndexProfileController,
    SearchProfileController,
    ShowProfileController,
    StoreProfileController,
    UpdateProfileController,
};
use App\Http\Controllers\Admin\Permission\{
    CreatePermissionController,
    DestroyPermissionController,
    EditPermissionController,
    IndexPermissionController,
    SearchPermissionController,
    ShowPermissionController,
    StorePermissionController,
    UpdatePermissionController
};
use App\Http\Controllers\Admin\PermissionProfile\{
    AttachPermissionProfileController,
    AvailablePermissionController,
    DetachPermissionProfileController,
    IndexPermissionProfileController
};
use App\Http\Controllers\Admin\ProfilePermission\IndexProfilePermissionController;
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

        /** Profiles management */
        Route::get('/profiles', IndexProfileController::class)->name('profiles.index');
        Route::post('/profiles', StoreProfileController::class)->name('profiles.store');
        Route::get('/profiles/create', CreateProfileController::class)->name('profiles.create');
        Route::get('/profiles/{id}', ShowProfileController::class)->name('profiles.show');
        Route::put('/profiles/{id}', UpdateProfileController::class)->name('profiles.update');
        Route::delete('/profiles/{id}', DestroyProfileController::class)->name('profiles.destroy');
        Route::get('/profiles/{id}/edit', EditProfileController::class)->name('profiles.edit');
        Route::any('/profiles/search', SearchProfileController::class)->name('profiles.search');

        /** Permissions management */
        Route::get('/permissions', IndexPermissionController::class)->name('permissions.index');
        Route::post('/permissions', StorePermissionController::class)->name('permissions.store');
        Route::get('/permissions/create', CreatePermissionController::class)->name('permissions.create');
        Route::get('/permissions/{id}', ShowPermissionController::class)->name('permissions.show');
        Route::put('/permissions/{id}', UpdatePermissionController::class)->name('permissions.update');
        Route::delete('/permissions/{id}', DestroyPermissionController::class)->name('permissions.destroy');
        Route::get('/permissions/{id}/edit', EditPermissionController::class)->name('permissions.edit');
        Route::any('/permissions/search', SearchPermissionController::class)->name('permissions.search');	

        /** Permissions x Profiles management */
        Route::get('profiles/{id}/permissions/{idPermission}/detach', DetachPermissionProfileController::class)->name('profiles.permissions.detach');
        Route::post('profiles/{id}/permissions', AttachPermissionProfileController::class)->name('profiles.permissions.attach');
        Route::any('profiles/{id}/permissions/availables', AvailablePermissionController::class)->name('profiles.permissions.availables');
        Route::get('profiles/{id}/permissions', IndexPermissionProfileController::class)->name('profiles.permissions.index');

        /** Profiles x Permissons management */
        Route::get('permissions/{id}/profiles', IndexProfilePermissionController::class)->name('permissions.profiles.index');
    });
    
    

    Route::fallback(function() {
        return view('pages.utility.404');
    });
});
