<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Contracts\View\View;

class IndexTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $tables = Table::paginate();

        return view('admin.pages.tables.index', compact('tables'));
    }
}
