<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DestroyCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id): RedirectResponse
    {
        if (!$data = Category::find($id)) {
            return redirect()->back();
        }
        
        $data->delete();

        return redirect()
            ->route(Str::before(Route::currentRouteName(), '.').'.index')
            ->with('message', 'Registro deletado com sucesso!');
    }
}
