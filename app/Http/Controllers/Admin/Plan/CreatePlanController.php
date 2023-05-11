<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Controller;

class CreatePlanController extends Controller
{
    public function __invoke()
    {
        return view('admin.pages.plans.create');
    }
}
