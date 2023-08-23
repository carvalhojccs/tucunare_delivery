<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateUserRequest $request, int $user_id): RedirectResponse
    {
        if(!$user = User::find($user_id)) {
            return redirect()->back();
        }

        $data = $request->only(['name', 'email']);

        if($request->password) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('message', 'Registro atualizado com sucesso!');
    }
}
