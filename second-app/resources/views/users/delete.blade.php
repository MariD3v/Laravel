@extends('layout')
@section('title')
Borrar
@endsection
@section('content')
 <h1>Formulario para eliminar un usuario</h1>
 <form method="post" action="{{ route('users.delete') }}">
    @csrf
    <label>Ingresa el usuario que quieres eliminar</label>
    <input type="text" name="id" placeholder="ID">
    <input type="submit">
 </form>
@endsection