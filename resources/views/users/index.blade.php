@extends('layouts.app')
@section('title', 'Listagens de Usuários')

@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py2">Listagem dos Usuários
    <a href="{{ route('users.create') }} " class="bg-orange-400 rounded-full text-white px-4 text-sm">(+)</a>
 </h1>
 <form action="{{ route('users.index') }}" method="get" class="py-5">
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
         <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              @if ($user->image)
                  <img src="{{ url("storage/{$user->image}")}}" alt="{{$user-> name}}" class='object-cover w-20'>        
              @else
                  <img src="{{ url("storage/favicon.ico")}}" alt="{{$user-> name}}" class='object-cover w-20'>        
              @endif
              {{$user-> name}}     
          </td>
         <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> {{ $user-> email}}  </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('users.edit',  $user->id) }}" class="bg-green-200 rounded-full py-2 px-6"> Editar. </a>
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('users.show',  $user->id) }}" class="bg-orange-200 rounded-full py-2 px-6"> Detalhes do Usuario. </a>
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('comments.index',  $user->id) }}" class="bg-blue-200 rounded-full py-2 px-6"> Anotações ({{$user->comments->count()}}) </a>
          </td>
       </tr>
      @endforeach
      </tbody>
  </table>
  <div class="py-4">
      {{ $users->appends([
          'search' => request()->get('search','')
      ])->links()}}
  </div>
  @endsection