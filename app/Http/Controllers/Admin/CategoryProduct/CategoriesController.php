<?php

namespace App\Http\Controllers\Admin\CategoryProduct;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class CategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $product_id): View
    {
        if (!$product = Product::find($product_id)) {
            return redirect()->back();
        }

        $categories = Product::with('categories')->find($product_id);

        return view('admin.pages.products.categories.index', compact('product','categories'));
    }
}
