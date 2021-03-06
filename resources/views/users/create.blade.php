@extends('layouts.app')
@section('title', 'Novo Usuario')

@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py2">Novo Usuario</h1>

@include('includes/validation-form')

<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('users._partials.form')
</form>

@endsection
