@extends('layouts.app')

@section('title', "Editar Usuario {$user->name}")

@section('content')
<h1>Editar Usuario {{ $user->name}}</h1>

@if ($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $erro)
            <li class="erro"> {{ $erro }} </li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Nome:" value= "{{$user->name}}">
    <input type="email" name="email" placeholder="E-Mail:" value= "{{$user->email}}">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">
        Enviar
    </button>
</form>

@endsection
