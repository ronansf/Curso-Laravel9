@extends('layouts.app')

@section('title', 'Novo Usuario')

@section('content')
<h1>Novo Usuario</h1>

@include('includes/validation-form')

<form action="{{ route('users.grava') }}" method="post">
    @csrf
    @include('users._partials.form')
</form>

@endsection
