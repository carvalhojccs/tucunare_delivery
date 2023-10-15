<?php

namespace App\Http\Controllers\Admin\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant;

class IndexTenantController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $tenants = Tenant::paginate();

        return view('admin.pages.tenants.index', compact('tenants'));
    }
}
