<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function index(){
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request){


        

        if ($request->trytoLogin()) {
            return to_route('dashboard');
        }
        
        
       

        return back()->with(['message' => 'Não deu certo !!!']);
    }

}
