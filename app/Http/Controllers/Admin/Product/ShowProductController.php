<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class ShowProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id): View
    {
        if (!$data = Product::find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.products.show', compact('data'));
    }
}
