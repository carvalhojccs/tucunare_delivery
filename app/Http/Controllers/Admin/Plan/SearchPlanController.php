<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SearchPlanController extends Controller
{
    public function __construct(private Plan $plan)
    {       
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $filters = $request->except('_token');

        $plans = $this->plan->search($request->filter);

        return view('admin.pages.plans.index', compact('plans', 'filters'));
    }
}
