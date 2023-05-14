<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreProfileRequest;
use App\Models\Profile;

class StoreProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreProfileRequest $request)
    {
        Profile::create($request->all());

        return redirect()
                ->route('profiles.index')
                ->with('message', 'Registro criado com sucesso!');        
    }
}
