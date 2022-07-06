@extends('layouts.app')
@section('title', 'Novo Menu')

@extends('layouts.menu')
@section('menu')


@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py2">Novo Menu</h1>

@include('includes/validation-form')

<form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('menus._partials.form')
</form>

@endsection
