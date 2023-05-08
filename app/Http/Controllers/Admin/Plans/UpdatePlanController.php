<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\Plans;

class UpdatePlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdatePlanRequest $request, $url)
    {
        Plans::where('url', $url)->update($request->except(['_token', '_method']));

        return redirect()->route('plans.index');
    }
}
