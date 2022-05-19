@extends('layouts.app')
@section('title', 'Novo Usuário')

@section('content')

<h1>NOVO USUÁRIO</h1>

<form action="#" method="POST">
    <input type="text" name="name" placeholder="Nome:">
    <input type="email" name="email" placeholder="E-mail:">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">Enviar</button>
</form>


@endsection