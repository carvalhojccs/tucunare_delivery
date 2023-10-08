<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use App\Http\Requests\Table\UpdateTableRequest;
use App\Models\Table;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class UpdateTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateTableRequest $request, int $id): RedirectResponse
    {
        if (!$table = Table::find($id)) {
            return redirect()->back();
        }

        $table->update($request->validated());

        return redirect()
            ->route(Str::before(Route::currentRouteName(), '.').'.index')
            ->with('message', 'Registro atualizado com sucesso!');
    }
}
