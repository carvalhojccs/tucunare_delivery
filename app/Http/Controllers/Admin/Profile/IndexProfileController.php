<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Contracts\View\View;

class IndexProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $profiles = Profile::latest()->paginate();

        return view('admin.pages.profiles.index', compact('profiles'));
    }
}
