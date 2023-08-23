<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DestroyUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(int $id)
    {
        if(!$user = User::find($id)) {
            return redirect()->back();
        }

        $user->delete();

        return redirect()->route('users.index')->with('message', 'Registro deletado com sucesso!');
    }
}
