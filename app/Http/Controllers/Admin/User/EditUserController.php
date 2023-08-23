<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $user_id)
    {
        if (!$user = User::find($user_id)) {
            return redirect()->back();
        }

        return view('admin.pages.users.edit', compact('user'));
    }
}
