<?php

namespace App\Http\Controllers\Admin\CategoryProduct;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoriesAvailableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $product_id): View
    {
        if (!$product = Product::find($product_id)) {
            return redirect()->back();
        }

        $filters = $request->except('_token');        

        $categories = Product::categoriesAvailable($request->filter, $product_id);

        return view('admin.pages.products.categories.available', compact('filters', 'categories', 'product'));
    }
}
