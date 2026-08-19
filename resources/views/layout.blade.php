<!DOCTYPE html>
<html lang="it"> 

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Stefano Caramagno">
</head>

<!-- BODY -->
<body>

    <header>
        @include('header')
    </header>

    <nav>
        @yield('contenuto_nav_specifico')
    </nav>

    <main>
        @yield('contenuto_main_specifico')
    </main>

    <footer>
        @include('footer')
    </footer>

</body>

</html> 
