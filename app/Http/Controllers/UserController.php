<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    { 
        $users = User::all();
        // $users = User::all()->where('role',0);
        
        return view('users',['users'=> $users,'i'=>1]);
    }
    public function add($id){
        $user = User::find($id);
        $user->role = true;
        $user->update();
        return self::index();
    }
}
