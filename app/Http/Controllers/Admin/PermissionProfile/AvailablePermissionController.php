<?php

namespace App\Http\Controllers\Admin\PermissionProfile;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Profile;

class AvailablePermissionController extends Controller
{
    public function __construct(private Profile $profile)
    {        
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke($profile_id)
    {
        $profile = Profile::findOrFail($profile_id);

        $permissions = $this->profile->permissionsAvailable($profile_id);        

        return view('admin.pages.profiles.permissions.available', compact('profile', 'permissions'));
    }
}
