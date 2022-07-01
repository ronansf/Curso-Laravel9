@extends('layouts.app')
@section('title', "Editar Comentários do Usuario {$user->name}")

@extends('layouts.menu')
@section('menu')


@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Editar Comentários do Usuário {{ $user->name}}</h1>

@include('includes/validation-form')

<form action="{{ route('comments.update', $comment->id)}}" method="post">
    @method('PUT')
    @include('users.comments._partials.form')
</form>

@endsection
