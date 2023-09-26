<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class EditProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke( int $id ): View
    {
        if (!$data = Product::find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.'.Route::currentRouteName(), compact('data'));
    }
}
