<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SearchProfileController extends Controller
{
    public function __construct(private Profile $profile)
    {        
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $filters = $request->except('_token');

        $profiles = $this->profile->search($request->filter);

        return view('admin.pages.profiles.index', compact('profiles', 'filters'));        
    }
}
