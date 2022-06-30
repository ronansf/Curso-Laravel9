@extends('layouts.app')
@section('title', "Novo Comentário Para o Usuário {$user->name}")

@extends('layouts.menu')
@section('menu')


@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py2">Novo Comentário Para o Usuário {{$user->name}}</h1>

@include('includes/validation-form')

<form action="{{ route('comments.store', $user->id) }}" method="post">
    @csrf
    @include('users.comments._partials.form')
</form>

@endsection
