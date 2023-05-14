<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class SearchPermissionController extends Controller
{
    public function __construct(private Permission $permisson)
    {        
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $filters = $request->except('_token');

        $permissons = $this->permisson->search($request->filter);

        return view('admin.pages.permissions.index', compact('permissions', 'filters'));
    }
}
