<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUserRequest $request)
    {
        $data = $request->all();
        $data['tenant_id'] = auth()->user()->tenant_id;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return to_route('users.index')
            ->with('message', 'Registro criado com sucesso!');
    }
}
