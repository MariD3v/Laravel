@extends('layout')
@section('title')
Usuarios
@endsection
@section('content')
 <h1>Listado de usuarios</h1>

 @if(count($users) > 0)
   <ul>
      @foreach($users as $user)
      <li>
         <p><strong>ID:</strong> {{ $user['id'] }}</p>
         {{ $user['name'] }} : {{ $user['password'] }}
      </li>
      @endforeach
   </ul>
 @else
  <p>No hay usuarios</p>
@endif

 <a href="{{ route('users.create') }}">Crear un nuevo usuario</a>
 <a href="{{ route('users.delete') }}">Eliminar un usuario</a>
 <a href="{{ route('users.update') }}">Modificar un usuario</a>
@endsection