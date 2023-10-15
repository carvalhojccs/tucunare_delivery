<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;

class EditPermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        if(!$permission = Permission::findOrFail($id)){
            return redirect()->back()->with('info', 'Permissão não encontrada!');
        };

        return view('admin.pages.permissions.edit', compact('permission'));
    }
}
