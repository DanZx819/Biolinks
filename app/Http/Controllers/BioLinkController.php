<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class BioLinkController extends Controller
{
    public function __invoke($handler)
    {
        $user = User::whereHandler($handler)->firstOrFail();
    
        return view('bio-links', compact('user'));
    }
}
