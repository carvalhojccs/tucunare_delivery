<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class ShowCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id): View
    {
        if (!$data = Category::find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.'.Route::currentRouteName(), compact('data'));
    }
}
