<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class CreateTableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('admin.pages.'.Route::currentRouteName());
    }
}
