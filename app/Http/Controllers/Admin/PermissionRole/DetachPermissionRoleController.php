<?php

namespace App\Http\Controllers\Admin\PermissionRole;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;

class DetachPermissionRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $role_id, int $permission_id): RedirectResponse
    {
        $role = Role::find($role_id);
        $permission = Permission::find($permission_id);

        if (!$role || !$permission) {
            return redirect()
            ->back();
        }

        $role->permissions()->detach($permission);

        return redirect()
            ->route('roles.show', $role_id)
            ->with('message', 'Permissão desvinculada com sucesso!');
    }
}
