<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use App\Http\Requests\Table\StoreTableRequest;
use App\Models\Table;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreTableRequest $request): RedirectResponse
    {
        Table::create($request->validated());

        return redirect()
            ->route('tables.index')
            ->with('message','Registro criado com sucesso!');
    }
}
