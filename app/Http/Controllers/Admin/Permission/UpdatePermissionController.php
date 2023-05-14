<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\Permission;

class UpdatePermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateProfileRequest $request, $id)
    {
        Permission::findOrFail($id)->update($request->except('_token', '_method'));
        
        return redirect()
                ->route('permissions.index')
                ->with('message', 'Registro atualizado com sucesso!');
    }
}
