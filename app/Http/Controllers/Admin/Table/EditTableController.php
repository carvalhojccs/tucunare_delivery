<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class EditTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id): RedirectResponse | View
    {
        if (!$table = Table::find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.tables.edit', compact('table'));
    }
}
