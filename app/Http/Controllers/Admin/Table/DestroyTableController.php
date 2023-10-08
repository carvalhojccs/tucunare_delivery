<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;

class DestroyTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id): RedirectResponse
    {        
        if (!$table = Table::find($id)) {
            return redirect()->back();
        }

        $table->delete();

        return redirect()
            ->route(Str::before(Route::currentRouteName(), '.').'.index')
            ->with('message', 'Registro deletado com sucesso!');
    }
}
