<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    { 
        $users = User::all()->where('role',0);
        return view('users',['users'=> $users]);
    }
}
