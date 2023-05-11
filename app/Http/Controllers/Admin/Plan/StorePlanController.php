<?php

namespace App\Http\Controllers\Admin\Plan;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlanRequest;
use App\Models\Plan;

class StorePlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StorePlanRequest $request)
    {

        Plan::create($request->all());
        
        return redirect()
            ->route('plans.index')
            ->with('message', 'Registro criado com sucesso.');
    }
}
