<?php

namespace App\Http\Controllers\Admin\PermissionProfile;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Profile;

class AvailablePermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($profile_id)
    {
        $profile = Profile::findOrFail($profile_id);
        $permissions = Permission::all();

        return view('admin.pages.profiles.permissions.available', compact('profile', 'permissions'));
    }
}
