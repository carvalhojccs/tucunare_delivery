<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlanRequest;
use App\Models\Plans;

class StorePlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StorePlanRequest $request)
    {

        Plans::create($request->all());
        
        return redirect()->route('plans.index');
    }
}
