<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\Plan;

class UpdatePlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdatePlanRequest $request, $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->update($request->except(['_token', '_method']));

        return redirect()
            ->route('plans.index')
            ->with('message', 'Registro atualizado com sucesso.');
    }
}
