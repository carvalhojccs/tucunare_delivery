<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class StoreCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreCategoryRequest $request)
    {        
        Category::create($request->all());

        return redirect()->route(Str::before(Route::currentRouteName(),'.').'.index');
    }
}
