<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class SearchPlanController extends Controller
{
    private $plansRepository;

    public function __construct(Plans $plans)
    {
        $this->plansRepository = $plans;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $filters = $request->except('_token');


        $plans = $this->plansRepository->search($request->filter);

        return view('admin.pages.plans.index', compact('plans', 'filters'));
    }
}
