<!DOCTYPE html>
<html lang="it"> 

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Stefano Caramagno">

    <title>Affitta su Airbnb</title>
    
    <link href="https://fonts.google.com/specimen/Anybody" rel="stylesheet"> 
    <link rel="shortcut icon" href="{{ asset('imgs_loghi_homepage/favicon.ico') }}" type="image/x-icon"> 

    <!-- Collegamento ai File CSS -->
    <link rel="stylesheet" href="{{ asset('pagina_affitta/affitta.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina_affitta/header.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina_affitta/main.css') }}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    
    <!-- Collegamento ai File JavaScript -->
    <script src="{{ asset('header.js') }}" defer></script>
    <script src="{{ asset('pagina_affitta/main.js') }}" defer></script>
    <script src="{{ asset('footer.js') }}" defer></script>
</head>

<!-- BODY -->
<body>

    @include('pagina_affitta/header')
    @include('pagina_affitta/main')
    @include('footer')

</body>

</html> 
