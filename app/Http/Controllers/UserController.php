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
        
        return view('users',['users'=> $users,'i'=>1]);
    }

    public function add($id){
        $user = User::find($id);
        if(!$user->role){
            $user->role = true;
            $user->update();
        }else{
            $user->role = false;
            $user->update();
        }
        
        return self::index();
    }
}
