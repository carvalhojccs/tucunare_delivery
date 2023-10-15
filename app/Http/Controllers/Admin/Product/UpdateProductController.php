<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateProductRequest $request, int $id)
    {
        if (!$product = Product::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();
        $data['image'] = $product->image;

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            if (Storage::exists($product->image)) {
                Storage::delete($product->image);
            }
            
            $data['image'] = $request->file('image')->store("tenants/{$tenant->uuid}/products");        
        }

        $product->update($data);

        return redirect()->route(Str::before(Route::currentRouteName(), '.').'.index');
    }
}
