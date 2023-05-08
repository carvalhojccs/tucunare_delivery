<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Models\Plans;

class EditPlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($url)
    {
        $plan = Plans::where('url', $url)->first();

        return view('admin.pages.plans.edit', compact('plan'));
    }
}
