<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class SearchRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $filters = $request->only('filter');

        $data = Role::search($request->filter);

        return view('admin.pages.'. Str::before(Route::currentRouteName(),'.').'.index', compact('data', 'filters'));
    }
}
