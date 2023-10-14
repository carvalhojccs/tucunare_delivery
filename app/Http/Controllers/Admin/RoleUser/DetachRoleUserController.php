<?php

namespace App\Http\Controllers\Admin\RoleUser;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class DetachRoleUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $user_id, int $role_id): RedirectResponse
    {
        $user = User::find($user_id);
        $role = Role::find($role_id);

        if (!$user || !$role) {
            return redirect()
            ->back();
        }

        $user->roles()->detach($role);

        return redirect()
            ->route('users.show', $user_id)
            ->with('message', 'Cargo desvinculado com sucesso!');
    }
}
