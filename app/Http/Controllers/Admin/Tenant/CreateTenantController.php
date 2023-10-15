<?php

namespace App\Http\Controllers\Admin\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class CreateTenantController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $plans = Plan::pluck('name', 'id');

        return view('admin.pages.'.Route::currentRouteName(), compact('plans'));
    }
}
