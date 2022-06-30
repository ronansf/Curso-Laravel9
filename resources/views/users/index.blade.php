@extends('layouts.app')
@section('title', 'Listagens de usuarios')

@extends('layouts.menu')
@section('menu')

@section('content')
   <h1 class="text-2x1 font-semibold leading-tigh py2">Listagem dos usuarios
      <a href="{{ route('users.create') }} " class="bg-blue-900 rounded-full">(+)</a>
   </h1>
   <form action="{{ route('users.index') }}" method="get" class="py-5">
      <input   type='text' name="search" placeholder="Pesquisar">
      <button  class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow"> Buscar </button>
   </form>
   <table class=" min-w-full leading-normal shadow-md rounded-lg overflow-hj">
        <thead>
        <tr>
            <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                Nome
            </th>
            <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                E-Mail
            </th>
            <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                Editar
            </th>
            <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                Detalhes
            </th>
            <th class="px-5 py-5 border-b2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold">
                Comentários
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
         <tr>
           <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> {{ $user-> name}} - </td>
           <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> {{ $user-> email}}  </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                | <a href="{{ route('users.editar',  $user->id) }}" class="bg-green-200 rounded-full py-2 px-6"> Editar. </a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                | <a href="{{ route('users.show',  $user->id) }}" class="bg-orange-200 rounded-full py-2 px-6"> Detalhes do Usuario. </a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            | <a href="{{ route('comments.index',  $user->id) }}" class="bg-blue-200 rounded-full py-2 px-6"> Anotações (0) </a>
            </td>
         </tr>
        @endforeach
        </tbody>
    </table>
@endsection

