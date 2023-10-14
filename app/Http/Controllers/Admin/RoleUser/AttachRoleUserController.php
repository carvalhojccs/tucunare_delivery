<?php

namespace App\Http\Controllers\Admin\RoleUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AttachRoleUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $user_id): RedirectResponse
    {
        if (!$user = User::find($user_id)) {
            return redirect()
                ->back();                
        }

        if (!$request->roles || count($request->roles) == 0) {
            return redirect()
                ->back()
                ->with('info', 'Selecione pelo menus um cargo!');
        }

        $user->roles()->attach($request->roles);

        return redirect()
            ->route('users.show', $user_id);
    }
}
