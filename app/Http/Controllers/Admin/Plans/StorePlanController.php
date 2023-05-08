<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlanRequest;
use App\Models\Plans;
use Illuminate\Support\Str;

class StorePlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StorePlanRequest $request)
    {
        $data = $request->all();
        $data['url'] = Str::kebab($request->name);

        Plans::create($data);
        
        return redirect()->route('plans.index');
    }
}
