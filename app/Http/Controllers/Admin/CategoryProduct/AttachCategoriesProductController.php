<?php

namespace App\Http\Controllers\Admin\CategoryProduct;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AttachCategoriesProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $product_id)
    {

        if (! $product = Product::find($product_id)) {
            return redirect()->back();
        }

        if (!$request->categories || count($request->categories) == 0) {
            return redirect()
                ->back()
                ->with('info', 'É necessário selecionar pelo menos uma categoria');
        }

        $product->categories()->attach($request->categories);

        return redirect()
            ->route('products.show', $product_id)
            ->with('message', 'Categoria vinculada com sucesso!');
        
    }
}
