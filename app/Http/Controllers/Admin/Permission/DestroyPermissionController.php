<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;

class DestroyPermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        Permission::findOrFail($id)->delete();

        return redirect()
                ->route('permissions.index')
                ->with('message', 'Registro deleteado com sucesso!');
    }
}
