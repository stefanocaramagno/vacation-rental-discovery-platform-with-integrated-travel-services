<!DOCTYPE html>
<html lang="it"> 

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Stefano Caramagno">

    <title>Brani Musicali Preferiti</title>
    
    <link href="https://fonts.google.com/specimen/Anybody" rel="stylesheet"> 
    <link rel="shortcut icon" href="{{ asset('imgs_loghi_homepage/favicon.ico') }}" type="image/x-icon"> 

    <!-- Collegamento ai File CSS -->
    <link rel="stylesheet" href="{{ asset('pagina_preferiti_brani_musicali/preferiti_brani_musicali.css') }}">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    
    <!-- Collegamento ai File JavaScript -->
    <script src="{{ asset('header.js') }}" defer></script>
    <script src="{{ asset('header.js') }}" defer></script>
    <script src="{{ asset('pagina_preferiti_brani_musicali/main_api.js') }}" defer></script>
    <script src="{{ asset('footer_section1.js') }}" defer></script>    
    <script src="{{ asset('footer.js') }}" defer></script>
    <script src="{{ asset('js/api_esterne.js') }}"></script>
</head>

<!-- BODY -->
<body>

    @extends('layout')

    @section('contenuto_main_specifico')
        @include('pagina_preferiti_brani_musicali/main')
    @endsection  

</body>

</html> 
