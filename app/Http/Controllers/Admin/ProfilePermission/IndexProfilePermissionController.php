<?php

namespace App\Http\Controllers\Admin\ProfilePermission;

use App\Http\Controllers\Controller;
use App\Models\Permission;

class IndexProfilePermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $permission_id)
    {
        $permission = Permission::with('profiles')->findOrFail($permission_id);

        if (!$permission) {
            return redirect()->back();
        }

        return view('admin.pages.permissions.profiles.index', compact('permission'));        
    }
}
