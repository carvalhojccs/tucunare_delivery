<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ShowRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id): RedirectResponse | View
    {
        if (!$data = Role::with('permissions')->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.roles.show', compact('data'));
    }
}
