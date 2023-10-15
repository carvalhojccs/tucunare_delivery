<?php

namespace App\Http\Controllers\Admin\ProfilePlan;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class IndexProfilePlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $proifle_id)
    {
        $profile = Profile::with('plans')->findOrFail($proifle_id);

        if (!$profile) {
            return redirect()->back();
        }

        return view('admin.pages.profiles.plans.index', compact('profile'));
    }
}
