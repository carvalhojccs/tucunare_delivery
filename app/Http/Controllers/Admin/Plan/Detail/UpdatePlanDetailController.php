<?php

namespace App\Http\Controllers\Admin\Plan\Detail;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePlanDetailRequest;
use App\Models\PlanDetail;

class UpdatePlanDetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdatePlanDetailRequest $request, $plan_id, $detail_id)
    {
        $detail = PlanDetail::findOrFail($detail_id);

        $detail->update($request->all());

        return redirect()
                ->route('plans.details.index', $plan_id)
                ->with('message', 'Registro atualizado com sucesso.');
    }
}
