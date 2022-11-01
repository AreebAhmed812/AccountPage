<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function list()
    {
        // return Session::get('logdata');
        $user = User::all();
        return view('userlist',['user'=>$user]);
    }

    public function create()
    {
        return view('create');
    }

    public function loginsubmit(Request $req)
    {
        User::select('*')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password],
            ]
        )->get();
        $req->session()->put('logdata',[$req->input()]);
        return redirect('/list');
    }

    public function createsubmit(Request $req)
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if($result)
        {
            $req->session()->put('logdata',[$req->input()]);
            return redirect('/list');
        }
    }
}
