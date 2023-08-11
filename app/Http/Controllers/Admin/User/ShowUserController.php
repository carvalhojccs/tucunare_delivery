<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;

class ShowUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $user_id): View
    {
        $user = User::with('tenant')->where('id', $user_id)->first();

        return view('admin.pages.users.show', compact('user'));
    }
}
