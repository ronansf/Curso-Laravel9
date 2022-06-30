@extends('layouts.app')
@section('title', 'Novo Usuario')

@extends('layouts.menu')
@section('menu')


@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py2">Novo Usuario</h1>

@include('includes/validation-form')

<form action="{{ route('users.grava') }}" method="post">
    @csrf
    @include('users._partials.form')
</form>

@endsection
