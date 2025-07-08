<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
       
        return view('dashboard.index',[
            'links' => $user->links()->orderBy('sort')->get(),
            'user' => $user
        ]);
    }
}
