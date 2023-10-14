<?php

namespace App\Http\Controllers\Admin\PermissionRole;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Contracts\View\View;

class AvailablePermissionRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $role_id): View
    {
        if (!$role = Role::find($role_id)) {
            return redirect()
                ->back();
        }

        $permissions = Role::permissionsAvailable($role_id);

        return view('admin.pages.roles.permissions.available', compact('permissions', 'role'));
    }
}
