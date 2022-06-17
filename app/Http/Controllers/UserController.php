<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Dentro desta vc implementa os seus codigos
    public function index()
    {
        $users = User::get();
        //dd($users);
        return view('users.index', compact('users'));

    }

    public function show($id)
    {
        //Sempre colocar os mesmos nomes do metodo com a view;
        //return view('users.show');
        //$user = User::where('id', $id)->first();
        if (!$user = User::find($id))
           return redirect()->route('users.index');
           //dd($user);
         return view('users.show', compact('user'));

    }
}
