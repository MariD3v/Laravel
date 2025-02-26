<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Mi aplicación')</title>
</head>
<body>
    <header>
    <nav>
        <a href="/">Inicio</a>
        <a href="{{route ("users.users")}}">Usuarios</a>
    </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    </footer>
</body>
