<?php

use App\Http\Controllers\Admin\Category\{
    CreateCategoryController,
    DestroyCategoryController,
    EditCategoryController,
    IndexCategoryController,
    SearchCategoryController,
    ShowCategoryController,
    StoreCategoryController,
    UpdateCategoryController
};
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
use App\Http\Controllers\Admin\PlanProfile\{
    AttachPlanProfileController,
    AvailablePlanProfileController,
    DetachPlanProfileController,
    IndexPlanProfileController
};
use App\Http\Controllers\Admin\ProfilePermission\IndexProfilePermissionController;
use App\Http\Controllers\Admin\ProfilePlan\IndexProfilePlanController;
use App\Http\Controllers\Admin\User\CreateUserController;
use App\Http\Controllers\Admin\User\DestroyUserController;
use App\Http\Controllers\Admin\User\EditUserController;
use App\Http\Controllers\Admin\User\IndexUserController;
use App\Http\Controllers\Admin\User\ShowUserController;
use App\Http\Controllers\Admin\User\StoreUserController;
use App\Http\Controllers\Admin\User\UpdateUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Site\LandingPageController;
use Illuminate\Support\Facades\Route;

//Route::redirect('/', 'login');
Route::get('/home', [LandingPageController::class, 'index'])->name('home');
Route::get('plans/{id}', [LandingPageController::class, 'plan'])->name('plan.subscription');

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
        Route::get('/profiles/{id}/permissions/{idPermission}/detach', DetachPermissionProfileController::class)->name('profiles.permissions.detach');
        Route::post('/profiles/{id}/permissions', AttachPermissionProfileController::class)->name('profiles.permissions.attach');
        Route::any('/profiles/{id}/permissions/availables', AvailablePermissionController::class)->name('profiles.permissions.availables');
        Route::get('/profiles/{id}/permissions', IndexPermissionProfileController::class)->name('profiles.permissions.index');

        /** Profiles x Permissons management */
        Route::get('/permissions/{id}/profiles', IndexProfilePermissionController::class)->name('permissions.profiles.index');

        /**Plans x Profiles management**/
	    Route::get('/plans/{id}/profiles/{idProfile}/detach', DetachPlanProfileController::class)->name('plans.profiles.detach');
	    Route::post('/plans/{id}/profiles', AttachPlanProfileController::class)->name('plans.profiles.attach');
	    Route::any('/plans/{id}/profiles/availables', AvailablePlanProfileController::class)->name('plans.profiles.availables');
	    Route::get('/plans/{id}/profiles', IndexPlanProfileController::class)->name('plans.profiles.index');

        /** Profiles x Plans management **/
	    Route::get('profiles/{id}/plans', IndexProfilePlanController::class)->name('profiles.plans.index');

        /** Users management **/
        Route::get('/users', IndexUserController::class)->name('users.index');
        Route::post('/users', StoreUserController::class)->name('users.store');
        Route::get('/users/create', CreateUserController::class)->name('users.create');
        Route::get('/user/{id}', ShowUserController::class)->name('users.show');
        Route::get('/user/{id}/edit', EditUserController::class)->name('users.edit');
        Route::put('/user/{id}', UpdateUserController::class)->name('users.update');
        Route::delete('/user/{id}', DestroyUserController::class)->name('users.destroy');

        /** Categories management */
        Route::match(['get','post'],'/categories/search', SearchCategoryController::class)->name('categories.search');
        Route::get('/categories', IndexCategoryController::class)->name('categories.index');
        Route::post('/categories', StoreCategoryController::class)->name('categories.store');
        Route::get('/categories/create', CreateCategoryController::class)->name('categories.create');
        Route::get('/categories/{id}', ShowCategoryController::class)->name('categories.show');
        Route::get('/categories/{id}/edit', EditCategoryController::class)->name('categories.edit');
        Route::put('/categories/{id}', UpdateCategoryController::class)->name('categories.update');
        Route::delete('/categories/{id}', DestroyCategoryController::class)->name('categories.destroy');
    });
    
    

    Route::fallback(function() {
        return view('pages.utility.404');
    });
});
