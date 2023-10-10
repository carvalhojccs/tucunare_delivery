<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class UpdateRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRoleRequest $request, int $id): RedirectResponse
    {
        if (!$data = Role::find($id)) {
            return redirect()->back();
        }

        $data->update($request->validated());

        return redirect()
            ->route(Str::before(Route::currentRouteName(), '.').'.index')
            ->with('message', 'Registro atualizado com sucesso!');
    }
}
