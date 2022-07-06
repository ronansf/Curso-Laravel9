<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GravaAlteraUsuarioFormRequest;

class UserController extends Controller
{
    //Criar um construtor
    protected $model;
    public function __Construct(User $user)
    {
        $this->model = $user;
    }
    //Dentro desta vc implementa os seus metodos
    public function index(Request $req)
    {
        $users = $this->model
                            ->getUsers(
                                search: $req->search ?? '');
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

    public function store(GravaAlteraUsuarioFormRequest $req)
    {
        //Criptografando a senha
        $data = $req->all();
        $data['password'] = bcrypt($req->password);
            if( $req->image)
            {                
             $data['image'] = $req->image->store('users');
             //$ext = $Req->image->getClientOriginalExtension();
             //$data['image'] = $Req->image->storeAs('users',now() . "." . $ext);
            }
        
        //gravando o usuario
        $user = User::create($data);
        //retornando para o formulario inicial
        return redirect()->route('users.index');
        //retornando para o formulario de cadastro
        //return redirect()->route('users.show', $user->id);


        // Não estamos criptografando a senha
         //$user = new User;
         //$user->name = $req->name;
         //$user->email = $req->email;
         //$user->password = $req->password;
         //$user->save();

    }
    public function edit($id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }
    public function update(GravaAlteraUsuarioFormRequest $req, $id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');
          
           $data = $req->only('name','email');
           if ($req->password)
                $data['password'] = bcrypt($req->password);
             
            if( $req->image)
                { 
                    if ($user->image && Storage::exists($user->image)) 
                    {
                        Storage::delete($user->image);
                    }                
                     $data['image'] = $req->image->store('users');
                }
            
            //grava no BD
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
