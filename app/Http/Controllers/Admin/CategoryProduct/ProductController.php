<?php

namespace App\Http\Controllers\Admin\CategoryProduct;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $category_id)
    {
        if (!$category = Category::finc($category_id)) {
            return redirect()->back();
        }

        $products = Category::with('products')->find($category_id);

        return view('admin.pages.products.categories.index', compact('category', 'products'));
    }
}
