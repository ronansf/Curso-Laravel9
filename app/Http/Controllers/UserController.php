<?php

namespace App\Http\Controllers;

use App\Http\Requests\GravaAlteraUsuarioFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //Criar um construtor
    protected $model;
    public function __Construct(User $user)
    {
        $this->model = $user;
    }
    //Dentro desta vc implementa os seus codigos
    public function index(Request $req)
    {
        $users = $this->model->getUsers(search: $req->search ?? '');
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        //Sempre colocar os mesmos nomes do metodo com a view;
        //return view('users.show');
        //$user = User::where('id', $id)->first();
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');
           //dd($user);
         return view('users.show', compact('user'));

    }

    public function create()
    {
        return view('users.create');
    }

    public function grava(GravaAlteraUsuarioFormRequest $Req)
    {
        //Criptografando a senha
        $data = $Req->all();
        $data['password'] = bcrypt($Req->password);
        //gravando o usuario
        $user = User::create($data);
        //retornando para o formulario inicial
        return redirect()->route('users.index');
        //retornando para o formulario de cadastro
        //return redirect()->route('users.show', $user->id);


        // Não estamos criptografando a senha
         //$user = new User;
         //$user->name = $Req->name;
         //$user->email = $Req->email;
         //$user->password = $Req->password;
         //$user->save();

    }
    public function editar($id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');

        return view('users.editar', compact('user'));
    }
    public function update(GravaAlteraUsuarioFormRequest $req, $id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');

           $data = $req->only('name','email');
           if ($req->password)
                $data['password'] = bcrypt($req->password);
            $user->update($data);

            return redirect()->route('users.index');
    }
    public function destroy($id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');
           $user->delete();
           return redirect()->route('users.index');
    }

}
