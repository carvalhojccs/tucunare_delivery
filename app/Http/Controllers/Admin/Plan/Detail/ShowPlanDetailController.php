<?php

namespace App\Http\Controllers\Admin\Plan\Detail;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanDetail;
use Illuminate\Http\Request;

class ShowPlanDetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($plan_id, $detail_id)
    {
        $plan = Plan::findOrFail($plan_id);
        $detail = PlanDetail::findOrFail($detail_id);

        return view('admin.pages.plans.details.show', compact('plan', 'detail'));
    }
}
