@extends('layouts.app')
@section('title', "Editar Usuario {$user->name}")

@extends('layouts.menu')
@section('menu')


@section('content')
<h1>Editar Usuario {{ $user->name}}</h1>

@include('includes/validation-form')

<form action="{{ route('users.update', $user->id)}}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection
