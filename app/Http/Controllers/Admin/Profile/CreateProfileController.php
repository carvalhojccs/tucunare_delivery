<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;

class CreateProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('admin.pages.profiles.create');
    }
}
