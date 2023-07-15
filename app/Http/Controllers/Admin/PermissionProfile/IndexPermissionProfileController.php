<?php

namespace App\Http\Controllers\Admin\PermissionProfile;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class IndexPermissionProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($profile_id)
    {
        $profile = Profile::with('permissions')->findOrFail($profile_id);

        return view('admin.pages.profiles.permissions.index', compact('profile'));
    }
}
