@extends('layouts.app')
@section('title', 'Listagem do usuario')

@section('content')

<h1>Menu {{$menu->nome}}</h1>
<ul>
    <li>{{ $menu->nome}} </li>
    <li>{{ $menu->image}} </li>
    <li>{{ $menu->created_at}} </li>
</ul>

<form action=" {{ route('menus.destroy', $menu->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="shadow rounded bg-red-200 hover:bg-red-400 focus:shadow"> Deletar </button>

</form>

@endsection
