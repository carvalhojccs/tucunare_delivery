<?php

namespace App\Http\Controllers\Admin\CategoryProduct;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class DetachCategoryProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $product_id, int $category_id)
    {
        $product = Product::find($product_id);
        $category = Category::find($category_id);

        if (!$product || !$category) {
            return redirect()
                    ->back();
        }

        $product->categories()->detach($category);

        return redirect()
                ->route('products.show', $product_id)
                ->with('message', 'Categoria desvinculada com sucesso!');
    }
}
