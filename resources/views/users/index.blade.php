@extends('layouts.app')

@section('title', 'Listagens de usuarios')

@section('content')
<h1>Listagem dos usuarios</h1>
<ul>
@foreach ($users as $user)
 <li>
    {{ $user-> name}} -
    {{ $user-> email}}
    | <a href="{{ route('users.show',  $user->id) }}"> Detahes do Usuario. </a>
 </li>
@endforeach
</ul>
@endsection
