<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class SearchCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
        $filters = $request->only('filter');

        $data = Category::search($request->filter);

        return view('admin.pages.'.Str::before(Route::currentRouteName(),'.').'.index', compact('data', 'filters'));
    }
}
