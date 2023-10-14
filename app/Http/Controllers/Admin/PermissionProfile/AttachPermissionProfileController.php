<?php

namespace App\Http\Controllers\Admin\PermissionProfile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AttachPermissionProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $profile_id): RedirectResponse
    {
        if (!$profile = Profile::find($profile_id)) {
            return redirect()->back();
        }

        if (!$request->permissions || count($request->permissions) == 0) {
            return redirect()
                    ->back()
                    ->with('info', 'Selecione pelo menos uma permissão!');
        }
        
        $profile->permissions()->attach($request->permissions);

        return redirect()
                ->route('profiles.permissions.index', $profile_id);
    }
}
