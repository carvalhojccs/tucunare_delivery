<?php

namespace App\Http\Controllers\Admin\PermissionRole;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AttachPermissionRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $role_id): RedirectResponse
    {
        if (!$role = Role::find($role_id)) {
            return redirect()
                ->back();                
        }

        if (!$request->permissions || count($request->permissions) == 0) {
            return redirect()
                ->back()
                ->with('info', 'Selecione pelo menus uma permissão!');
        }

        $role->permissions()->attach($request->permissions);

        return redirect()
            ->route('roles.show', $role_id);
    }
}
