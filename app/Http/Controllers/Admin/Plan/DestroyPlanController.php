<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Controller;
use App\Models\Plan;

class DestroyPlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($url)
    {
      $plan = Plan::where('url', $url)->first();      

      if ($plan->details->count() > 0) {
        return redirect()
                ->route('plans.index')
                ->with('error', 'O plano não pode ser deletado. Favor deletar primeiro os detalhes do plano');
      }

      $plan->delete();

      return redirect()
        ->route('plans.index')
        ->with('message', 'Registro deletado com sucesso.');
    }
}
