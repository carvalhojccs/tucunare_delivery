<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\Profile;

class UpdateProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateProfileRequest $request, $id)
    {
        $profile = Profile::findOrFail($id);

        $profile->update($request->except(['_token', '_method']));

        return redirect()
            ->route('profiles.index')
            ->with('message', 'Registro atualizado com sucesso!');
    }
}
