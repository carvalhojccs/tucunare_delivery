<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Contracts\View\View;

class LandingPageController extends Controller
{
    public function index(): View
    {
        return view('site.home.index');
    }

    public function plan(int $plan_id)
    {
        
        if (!$plan = Plan::find($plan_id)) {
            return redirect()->back();
        }        

        session()->put('plan', $plan);

        return to_route('register');
    }
}
