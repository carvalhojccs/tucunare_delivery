<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Contracts\View\View;

class IndexPermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $permissions = Permission::latest()->paginate();

        return view('admin.pages.permissions.index', compact('permissions'));
    }
}
