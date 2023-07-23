<?php

namespace App\Http\Controllers\Admin\PlanProfile;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class AvailablePlanProfileController extends Controller
{
    public function __construct(private Plan $plan)
    {        
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $plan_id)
    {
        $plan = Plan::findOrfail($plan_id);

        $filters = $request->except('_token');

        $profiles = $this->plan->profilesAvailabe($plan_id, $request->filter);        

        return view('admin.pages.plans.profiles.available',compact('plan', 'profiles','filters'));
    }
}
