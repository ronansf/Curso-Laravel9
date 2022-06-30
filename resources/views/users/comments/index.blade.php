@extends('layouts.app')
@section('title', "Comentarios do Usuario {$user->name}")

@extends('layouts.menu')
@section('menu')

@section('content')
   <h1 class="text-2x1 font-semibold leading-tigh py2">
        Comentarios do Usuario {{$user->name}}
      <a href="{{ route('comments.create', $user->id) }} " class="bg-orange-200 rounded-full text-white px-4 text-sm ">(+)</a>
   </h1>
   <form action="{{ route('users.index') }}" method="get" class="py-5">
      <input   type='text' name="search" placeholder="Pesquisar">
      <button  class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow "> Buscar </button>
   </form>
   <table class=" min-w-full leading-normal shadow-md rounded-lg overflow-hj">
        <thead>
            <tr>
                <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                    Conteudo
                </th>
                <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                    Visivel
                </th>
                <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                    Editar
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($comments as $comment)
         <tr>
           <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> {{ $comment->body}} - </td>
           <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> {{ $comment->visible ? "Sim" : "Não"}}  </td>
           <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('comments.edit', [ user => $user->id, id => $comment->id]) }}" class="bg-green-200 rounded-full py-2 px-6"> Editar. </a>
        </td>
         </tr>
        @endforeach
        </tbody>
    </table>
@endsection
