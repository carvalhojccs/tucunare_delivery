<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class EditProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $profile = Profile::findOrFail($id);

        return view('admin.pages.profiles.edit', compact('profile'));
    }
}
