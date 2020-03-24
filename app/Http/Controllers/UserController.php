<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'newPassword' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function updatePassword(Request $request){

        $this->validate($request, [
            'currentPassword'     => 'required',
            'newPassword'     => 'required|min:8',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        $data = $request->all();

        if(!\Hash::check($data['currentPassword'], auth()->user()->password)){

            return back()->withErrors(['error' => 'Senha atual incorreta']);

        }else{
            $user = Auth::user();
            $user->password = bcrypt($request->get('newPassword'));
            $user->save();
            return back()->with("success", "Senha Alterada com sucesso!");
        }
    }
}
