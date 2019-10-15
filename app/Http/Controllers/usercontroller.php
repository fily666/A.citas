<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class usercontroller extends Controller
{

    public function  create(Request $request)
    {
      $User= new User();

      $User->name = $request->name;
      $User->email = $request->email;
      $User->password = bcrypt($request->password);
      $User->save();
     
      return redirect()->route('usuarios')->with('info','usuario creado exitosamente');
    }



     public function index()
    {
        $user = User::all();
        
        return view('usuarios')->with('user',$user);
    }
}

