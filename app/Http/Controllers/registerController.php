<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registerController extends Controller
{
    public function register(Request $req)
    {
        if($req->isMethod('post'))
        {
        $users=new User;
        $users->name=$req->name;
        $users->email=$req->email;
        $users->password=bcrypt($req->password);
        $users->save();
        auth()->login($users);
        return redirect('/');
        }
        else{
              return view('auth.register');
        }
        
    }
}
