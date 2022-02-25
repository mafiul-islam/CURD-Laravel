<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Users extends Controller
{
    function list() 
    {
        return view('userList');
    }
    function create() 
    {
        return view('createUser');
    }

    function loginsubmit(Request $req) {
        // print_r($req->input());
    //    
      return  User::select('*')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password]
            ]
        )->get();
    }

    function createsubmit(Request $req) {
       $user = new User;
       $user->name = $req->name;
       $user->email = $req->email;
       $user->password = $req->password;
       $user->save();
    }
}
