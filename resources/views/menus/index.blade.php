@extends('layouts.app')
@section('title', 'Listagens de Menus')


@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py2">Listagem dos Menus
  <a href="{{ route('menus.create') }} " class="bg-orange-400 rounded-full text-white px-4 text-sm">(+)</a>
</h1>
<form action="{{ route('menus.index') }}" method="get" class="py-5">
  <input   type='text' name="search" placeholder="Pesquisar">
  <button  class="shadow bg-green-500 rounded-full hover:bg-purple-400 focus:shadow"> Buscar </button>
</form>
<table class=" min-w-full leading-normal shadow-md rounded-lg overflow-hj">
    <thead>
    <tr>
        <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
            Nome
        </th>
        <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
            Texto
        </th>
        <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
            Editar
        </th>
        <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
            Deletar
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($menus as $menu)
     <tr>
       <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            @if ($menu->image)
                <img src="{{ url("storage/{$menu->image}")}}" alt="{{$menu->nome}}" class='object-cover w-20'>        
            @else
                <img src="{{ url("storage/favicon.ico")}}" alt="{{$menu->nome}}" class='object-cover w-20'>        
            @endif
            {{$menu->nome}}     
        </td>
       <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> {{ $menu->texto}}  </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('menus.edit',$menu->id) }}" class="bg-green-200 rounded-full py-2 px-6"> Editar. </a>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('menus.destroy',$menu->id) }}" class="bg-orange-200 rounded-full py-2 px-6"> Deletar. </a>
        </td>
     </tr>
    @endforeach
    </tbody>
</table>
<div class="py-4">
    {{ $menus->appends([
        'search' => request()->get('search','')
    ])->links()}}
</div>

@endsection

