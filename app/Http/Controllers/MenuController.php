<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    //Criar um construtor
    protected $model;
    public function __Construct(Menu $menu)
    {
        $this->model = $menu;
    }
    public function index(Request $req)
    {
        //dd($req);
        $menus = $this->model->getMenus(
                                search: $req->search ?? '');
        return view('menus.index', compact('menus'));
    }
    public function view($id)
    {
        //dd($id);   
        if (!$menu = $this->model->find($id))
           return redirect()->route('menus.index');
      
         return view('menus.view', compact('menu'));
    }
    public function show($id)
    {
        if (!$menu = $this->model->find($id))
           return redirect()->route('menus.index');
      
         return view('menus.show', compact('menu'));
    }
    public function create()
    {
        return view('menus.create');
    }
    public function edit($id)
    {
        if (!$menu = $this->model->find($id))
           return redirect()->route('menus.index');

        return view('menus.edit', compact('menu'));
    }
    public function store(Request $req)
    {        
        $data = $req->all();
        //dd($req->image);
        if($req->image)
        {                
             $data['image'] = $req->image->store('menus');
        }
        //dd($data);
        //gravando o menu
        $menu = Menu::create($data);
        return redirect()->route('menus.index', $menu->id);
    }
    public function update(Request $req, $id)
    {
        if (!$menu = $this->model->find($id))
           return redirect()->route('menus.index');
          
           $data = $req->all();
             
            if( $req->image)
                { 
                    if ($menu->image && Storage::exists($menu->image)) 
                    {
                        Storage::delete($menu->image);
                    }                
                     $data['image'] = $req->image->store('menus');
                }
            
            //grava no BD
            $menu->update($data);
            return redirect()->route('menus.index');
    }
    public function destroy($id)
    {
        if (!$menu = $this->model->find($id))
           return redirect()->route('menus.index');
           $menu->delete();
           return redirect()->route('menus.index');
    }
}
