@extends('layouts.app')
@section('title', 'Detalhes do Usuário')
@section('content')

<h1>DETALHES DO USER COM #ID =  {{ $user->id}}</h1>


<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    
</ul>

@endsection