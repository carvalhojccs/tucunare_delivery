<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Controller;
use App\Models\Plan;

class EditPlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($url)
    {
        $plan = Plan::where('url', $url)->first();

        return view('admin.pages.plans.edit', compact('plan'));
    }
}
