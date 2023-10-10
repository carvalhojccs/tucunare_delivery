<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

class DestroyRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id): RedirectResponse
    {        
        if (!$data = Role::find($id)) {
            return redirect()->back();
        }

        $data->delete();

        return redirect()
            ->route(Str::before(Route::currentRouteName(), '.').'.index')
            ->with('message', 'Registro deletado com sucesso!');
    }
}
