<?php

namespace App\Http\Controllers\Admin\RoleUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AvailableRoleUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $user_id): View
    {
        if (!$user = User::find($user_id)) {
            return redirect()
                ->back();
        }

        $roles = User::rolesAvailable($user_id);

        return view('admin.pages.users.roles.available', compact('roles', 'user'));
    }
}
