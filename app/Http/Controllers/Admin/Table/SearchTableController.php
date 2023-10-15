<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class SearchTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $filters = $request->only('filter');

        $tables = Table::search($request->filter);

        return view('admin.pages.'. Str::before(Route::currentRouteName(),'.').'.index', compact('tables', 'filters'));
    }
}
