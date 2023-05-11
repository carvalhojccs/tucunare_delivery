<?php

namespace App\Http\Controllers\Admin\Plan\Detail;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlanDetailRequest;
use App\Models\Plan;

class StorePlanDetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StorePlanDetailRequest $request, $plan_id)
    {
        $plan = Plan::findOrFail($plan_id);

        $plan->details()->create($request->all());

        return redirect()
            ->route('plans.details.index', $plan_id)
            ->with('message', 'Registro criado com sucesso.');
    }
}
