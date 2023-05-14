<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\StorePermissionRequest;
use App\Models\Permission;

class StorePermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StorePermissionRequest $request)
    {
        Permission::create($request->all());

        return redirect()
                ->route('permissions.index')
                ->with('message', 'Registro criado com sucesso!');
    }
}
