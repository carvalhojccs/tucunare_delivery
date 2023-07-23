<?php

namespace App\Http\Controllers\Admin\PlanProfile;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Contracts\View\View;

class IndexPlanProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($plan_id): View
    {
        $plan = Plan::with('profiles')->findOrFail($plan_id);

        if (!$plan) {
            return redirect()->back();
        }

        return view('admin.pages.plans.profiles.index', compact('plan'));
    }
}
