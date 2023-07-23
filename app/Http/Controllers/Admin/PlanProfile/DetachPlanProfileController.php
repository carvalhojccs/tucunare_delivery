<?php

namespace App\Http\Controllers\Admin\PlanProfile;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Profile;

class DetachPlanProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $plan_id, int $profile_id)
    {
        $plan = Plan::findOrFail($plan_id);
        $profile = Profile::findOrFail($profile_id);

        

        if (!$plan || !$profile) {
            return redirect()->back();
        }

        $plan->profiles()->detach($profile);

        return redirect()
                ->route('plans.profiles.index', $plan_id)
                ->with('message','Perfil desvinculado com sucesso!');
    }
}
