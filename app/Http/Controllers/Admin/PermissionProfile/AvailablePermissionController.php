<?php

namespace App\Http\Controllers\Admin\PermissionProfile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class AvailablePermissionController extends Controller
{
    public function __construct(private Profile $profile)
    {        
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $profile_id)
    {
        $profile = Profile::findOrFail($profile_id);

        $filters = $request->except('_token');
        
        $permissions = $this->profile->permissionsAvailable($profile_id, $request->filter);

        return view('admin.pages.profiles.permissions.available', compact('profile', 'permissions', 'filters'));
    }
}
