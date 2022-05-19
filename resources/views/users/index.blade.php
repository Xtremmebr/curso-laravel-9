@extends('layouts.app')
@section('title', 'Lista de Usuários')
@section('content')
<h1>
    Listagem dos Usuários!
    (<a href="`{{route('users.create')}}">+</a>)
</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->id }} -
            {{ $user->name }} -
            {{ $user->email }} -
            {{ $user->updated_at }}
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </li>
    @endforeach
</ul>
@endsection
