<?php

namespace App\Http\Controllers\Admin\PermissionProfile;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;

class DetachPermissionProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $profile_id, int $permission_id): RedirectResponse
    {
        $profile = Profile::findOrFail($profile_id);
        $permission = Permission::findOrFail($permission_id);
        
        if (!$profile || !$permission) {
            return redirect()
                    ->back();
        }

        $profile->permissions()->detach($permission);

        return redirect()
                ->route('profiles.permissions.index', $profile_id)
                ->with('message','Permissão desvinculada com sucesso!');
    }
}
