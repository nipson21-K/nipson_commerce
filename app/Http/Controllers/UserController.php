<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    function login(Request $req)
    {
       $user=User::where(['email'=>$req->email])->first();

       if(!$user || $user->password != $req->password )
       {
        return "Email or password not matched";
       }
       else
       {
        $req->session()->put('user', $user);
        return redirect('/');
       }
    }
    
}