@extends('layouts.app')
@section('title', 'Listagens de usuarios')

@extends('layouts.menu')
@section('menu')

@section('content')
   <h1>Listagem dos usuarios
      <a href="{{ route('users.create') }} ">(+)</a>
   </h1>
   <form action="{{ route('users.index') }}" method="get">
      <input   type='text' name="search" placeholder="Pesquisar">
      <button> Pesquisar </button>
   </form>
   <ul>
      @foreach ($users as $user)
         <li>
            {{ $user-> name}} -
            {{ $user-> email}}
            | <a href="{{ route('users.editar',  $user->id) }}"> Editar. </a>
            | <a href="{{ route('users.show',  $user->id) }}"> Detalhes do Usuario. </a>
         </li>
      @endforeach
   </ul>
@endsection

