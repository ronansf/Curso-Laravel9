@extends('layouts.app')
@section('title', "Editar Menu {$menu->nome}")

@extends('layouts.menu')
@section('menu')


@section('content')
<h1 calss="text-2x1 font-semibold leading-tigh py-2">Editar Menu {{ $menu->nome}}</h1>

@include('includes/validation-form')

<form action="{{ route('menus.update', $menu->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('menus._partials.form')
</form>

@endsection
