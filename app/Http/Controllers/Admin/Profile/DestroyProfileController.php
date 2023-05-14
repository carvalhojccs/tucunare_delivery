<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class DestroyProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        Profile::findOrFail($id)->delete();

        return redirect()
            ->route('profiles.index')
            ->with('message', 'Registro deletado com sucesso!');
    }
}
