<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;

class ShowPermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $permission = Permission::findOrFail($id);

        return view('admin.pages.permissions.show', compact('permission'));
    }
}
