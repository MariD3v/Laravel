@extends('layout')
@section('title')
Crear
@endsection
@section('content')
 <h1>Formulario para crear usuarios</h1>
 <form method="post" action="{{ route('users.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nombre">
    <input type="password" name="password" placeholder="Contraseña">
    <input type="submit">
 </form>
@endsection
