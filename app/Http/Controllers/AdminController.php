<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewDashboard()
    {
        return view('admin.dashboard');
    }

    public function viewUsers()
    {
        $users = User::all();
        
        return view('admin.users', [
            'users' => $users
        ]);
    }
}
