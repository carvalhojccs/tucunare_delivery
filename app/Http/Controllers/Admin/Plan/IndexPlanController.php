<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Controller;
use App\Models\Plan;

class IndexPlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $plans = Plan::latest()->paginate();

        return view('admin.pages.plans.index', compact('plans'));
    }
}
