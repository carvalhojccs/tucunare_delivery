<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class IndexPlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $plans = Plans::latest()->paginate();

        return view('admin.pages.plans.index', compact('plans'));
    }
}
