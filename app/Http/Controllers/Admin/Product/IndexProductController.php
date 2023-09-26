<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

class IndexProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $data = Product::paginate();

        return view('admin.pages.'.Str::before(Route::currentRouteName(),'.').'.index', compact('data'));
    }
}
