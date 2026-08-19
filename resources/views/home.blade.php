<!DOCTYPE html>
<html lang="it"> 

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Stefano Caramagno">

    <title>Airbnb</title>
    
    <link href="https://fonts.google.com/specimen/Anybody" rel="stylesheet"> 
    <link rel="shortcut icon" href="{{ asset('imgs_loghi_homepage/favicon.ico') }}" type="image/x-icon">

    <!-- Collegamento ai File CSS -->
    <link rel="stylesheet" href="{{ asset('pagina_home/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="stylesheet" href="{{ asset('nav_section1.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina_home/nav_section2.css') }}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    
    <!-- Collegamento ai File JavaScript -->
    <script src="{{ asset('header.js') }}" defer></script>
    <script src="{{ asset('nav_section1.js') }}" defer></script>
    <script src="{{ asset('pagina_home/nav_section2.js') }}" defer></script>
    <script src="{{ asset('pagina_home/main.js') }}" defer></script>
    <script src="{{ asset('footer.js') }}" defer></script>
    <script src="{{ asset('pagina_home/main_api.js') }}" defer></script>
    <script src="{{ asset('pagina_home/nav_section2_api.js') }}" defer></script>
    <script src="{{ asset('api_esterne.js') }}" defer></script>

    <script async src="https://maps.googleapis.com/maps/api/js?key=insert_client_id_google_maps&callback=console.debug&libraries=maps,marker&v=beta"></script>
</head>

<!-- BODY -->
<body>

    @extends('layout')

    @section('contenuto_nav_specifico')
        @include('pagina_home/nav')
    @endsection

    @section('contenuto_main_specifico')
        @include('pagina_home/main')
    @endsection  

</body>

</html> 
