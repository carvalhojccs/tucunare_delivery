<?php

namespace App\Http\Controllers\Admin\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\StoreTenantRequest;
use Illuminate\Http\Request;

class StoreTenantController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreTenantRequest $request)
    {
        dd($request->all());
    }
}
