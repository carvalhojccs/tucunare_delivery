<?php

namespace App\Http\Controllers\Admin\Plan\Detail;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Contracts\View\View;

class CreatePlanDetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($plan_id): View
    {
        $plan = Plan::findOrFail($plan_id);

        return view('admin.pages.plans.details.create', compact('plan'));
    }
}
