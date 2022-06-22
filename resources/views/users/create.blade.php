@extends('layouts.app')

@section('title', 'Novo Usuario')

@section('content')
<h1>Novo Usuario</h1>

@if ($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $erro)
            <li class="erro"> {{ $erro }} </li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.grava') }}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Nome:" value= "{{ old('name') }}">
    <input type="email" name="email" placeholder="E-Mail:" value= "{{ old('email') }}">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">
        Enviar
    </button>
</form>

@endsection
