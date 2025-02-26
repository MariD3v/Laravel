@extends('layout')
@section('title')
ID
@endsection
@section('content')
    @if($user)
        <div class="user-details">
            <p><strong>ID:</strong> {{ $user['id'] }}</p>
            <p><strong>Nombre:</strong> {{ $user['name'] }}</p>
            <p><strong>Contraseña:</strong> {{ $user['password'] }}</p>
        </div>
    @else
        <p>El usuario no fue encontrado.</p>
    @endif
@endsection