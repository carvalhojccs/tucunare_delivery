<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class StoreProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreProductRequest $request)
    {
        $data = $request->all();        

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store("tenants/{$tenant->uuid}/products");        
        }

        Product::create($data);

        return redirect()
                ->route(Str::before(Route::currentRouteName(), '.').'.index')
                ->with('message', 'Registro criado com sucesso!');
    }
}
