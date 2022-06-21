@extends('layouts.app')

@section('title', 'Novo Usuario')

@section('content')
<h1>Novo Usuario</h1>

<form action="{{ route('users.grava') }}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Nome:">
    <input type="email" name="email" placeholder="E-Mail:">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">
        Enviar
    </button>
</form>

@endsection
