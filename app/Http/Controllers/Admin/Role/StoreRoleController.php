<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRoleRequest $request): RedirectResponse
    {
        Role::create($request->validated());

        return redirect()
            ->route('roles.index')
            ->with('message','Registro criado com sucesso!');
    }
}
