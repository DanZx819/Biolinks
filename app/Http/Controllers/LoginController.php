<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function index(){
        return view('auth.login');
    }

    public function login(){


        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if($user = User::query()

        ->where('email', '=', request()->email)

        ->first()){

            if(Hash::check(request()->password, $user->password)){
                Auth::login($user);
            }

            

            return to_route('dashboard');
        }

        
       

        return back()->with(['message' => 'Não deu certo !!!']);
    }

}
