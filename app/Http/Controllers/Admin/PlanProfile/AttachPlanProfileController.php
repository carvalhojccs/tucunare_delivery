<?php

namespace App\Http\Controllers\Admin\PlanProfile;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class AttachPlanProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $plan_id)
    {
        if (!$plan = Plan::find($plan_id)) {
            return redirect()->back();
        }

        if (!$request->profiles || count($request->profiles) == 0) {
            return redirect()->back()->with('info', 'Selecione pelo menos um perfil!');
        }

        $plan->profiles()->attach($request->profiles);

        return redirect()->route('plans.profiles.index', $plan_id);
    }
}
