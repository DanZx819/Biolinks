<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view('profile', [
            'user' => Auth::user(),
        ]);
    }

    public function update(ProfileRequest $request){

        $user = Auth::user();

        $user->fill($request->validated())->save();

        return back()->with('message', 'Profile atualizado com sucesso !!!');

    }
}
