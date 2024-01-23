<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (User::create($credentials)) {
            return redirect('login');
        };
 
        return back()->withErrors($credentials);
    }
}
