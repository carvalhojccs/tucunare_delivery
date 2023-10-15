<?php

namespace App\Http\Controllers\Admin\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Http\Request;

class ShowTenantController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id)
    {
        if (!$tenant = Tenant::find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.tenants.show', compact('tenant'));
    }
}
