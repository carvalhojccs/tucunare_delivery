<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;

class IndexUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $users = User::paginate();

        return view('admin.pages.users.index', compact('users'));
    }
}
