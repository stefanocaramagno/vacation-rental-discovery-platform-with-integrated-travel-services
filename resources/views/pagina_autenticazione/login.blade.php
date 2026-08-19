<!DOCTYPE html>
<html lang="it">

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Stefano Caramagno">

    <title>Login</title>

    <link rel="shortcut icon" href="{{ asset('imgs_loghi_homepage/favicon.ico') }}" type="image/x-icon">

    <!-- Collegamento ai File CSS -->
    <link rel="stylesheet" href="{{ asset('pagina_autenticazione/autenticazione.css') }}">

    <!-- Collegamento ai File JavaScript -->
    <script src="{{ asset('pagina_autenticazione/login.js') }}" defer></script>
 
</head>

<!-- BODY -->
<body>
    <h1>Accedi</h1>

    <button class="pulsante-torna-indietro-login">
        <a href="{{ url('pagina_autenticazione/check_email') }}">Torna indietro</a>
    </button>

    <form action="{{ url('pagina_autenticazione/login') }}" method="post" name="login_form">

        @csrf 

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Password"  value='{{ old("password") }}'>

        <button type="submit"  id="pulsante-submit">Accedi</button>
    </form>

    <div id="messaggio-errore"></div>

    @if($error == 'campi_vuoti')
        <div class='errore'>Compilare tutti i campi.</div>
    @elseif($error == 'credenziali_non_valide')
        <div class='errore'>Credenziali non valide.</div>
    @endif

</body>

</html>
