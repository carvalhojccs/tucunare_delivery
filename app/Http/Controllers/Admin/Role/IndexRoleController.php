<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Contracts\View\View;

class IndexRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $data = Role::paginate();

        return view('admin.pages.roles.index', compact('data'));
    }
}
