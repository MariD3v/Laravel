@extends('layout')
@section('title')
Actualizar
@endsection
@section('content')
 <h1>Formulario para modificar un usuario</h1>
 <form method="post" action="{{ route('users.update') }}">
    @csrf
    <label>Ingresa el usuario que quieres modificar</label>
    <input type="text" name="id" placeholder="ID">
    <input type="submit">
    @if(isset($error))
        <p style="color: red;">Error: {{ $error }}</p>
    @endif
 </form>
@endsection