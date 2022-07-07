@extends('layouts.app')
@section('title', "Editar Usuario {$user->name}")

@section('content')
<h1 calss="text-2x1 font-semibold leading-tigh py-2">Editar Usuario {{ $user->name}}</h1>

@include('includes/validation-form')

<form action="{{ route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection
