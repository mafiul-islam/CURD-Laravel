<?php

namespace App\Http\Controllers;
// use App\User;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;

class Users extends Controller
{
    function list()
    {
        //    return Session()->get('logData');
        $user = User::all();
        return view('userList', ['user' => $user]);
    }
    function create()
    {
        return view('createUser');
    }

    function loginsubmit(Request $req)
    {
        // print_r($req->input());
        //    
        User::select('*')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password]
            ]
        )->get();
        $req->session()->put('logData', [$req->input()]);
        return redirect('/list');
    }

    function createsubmit(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if ($result) {
            $req->session()->put('logData', [$req->input()]);
            return redirect('/list');
        }
    }
}
