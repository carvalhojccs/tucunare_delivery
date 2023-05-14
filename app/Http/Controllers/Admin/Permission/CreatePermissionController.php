<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;

class CreatePermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('admin.pages.permissions.create');
    }
}
