@extends('layout')
@section('title')
Actualizar
@endsection
@section('content')
<h1>Formulario para actualizar usuarios</h1>
 <form method="post" action="{{ route('users.update2') }}">
    @csrf
    @if(isset($user)) 
    <label>ID: {{ $user['id'] }}</label>
    <input type="hidden" name="id" value="{{ $user['id'] }}">
    <label>Nombre</label>
    <input type="text" name="name" value="{{ $user['name'] }}">
    <label>Contraseña</label>
    <input type="password" name="password" value="{{ $user['password'] }}">
    <input type="submit">
    @else
    <p>No hemos encontrado el usuario</p>
    @endif
 </form>
@endsection