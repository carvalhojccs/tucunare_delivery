<?php

namespace App\Http\Controllers\Admin\Plan\Detail;

use App\Http\Controllers\Controller;
use App\Models\PlanDetail;

class DestroyPlanDetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($plan_id, $detail_id)
    {
        PlanDetail::findOrFail($detail_id)->delete();

        return redirect()
                ->route('plans.details.index', $plan_id)
                ->with('message', 'Registro deletado com sucesso');
    }
}
