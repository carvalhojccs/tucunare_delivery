<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class UpdatePlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $url)
    {
        Plans::where('url', $url)->update($request->except(['_token', '_method']));

        return redirect()->route('plans.index');
    }
}
