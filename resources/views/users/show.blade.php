@extends('layouts.app')
@section('title', 'Listagem do usuario')

@extends('layouts.menu')
@section('menu')

@section('content')

<h1>Listagem do usuario {{ $user->name}}</h1>

<ul>

     <li>{{ $user->name}} </li>
     <li>{{ $user->email}} </li>
     <li>{{ $user->created_at}} </li>


</ul>
@endsection
