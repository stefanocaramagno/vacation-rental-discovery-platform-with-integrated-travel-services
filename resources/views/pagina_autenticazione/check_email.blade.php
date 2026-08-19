<!DOCTYPE html>
<html lang="it">

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Stefano Caramagno">

    <title>Check Email</title>

    <link rel="shortcut icon" href="{{ asset('imgs_loghi_homepage/favicon.ico') }}" type="image/x-icon">

    <!-- Collegamento ai File CSS -->
    <link rel="stylesheet" href="{{ asset('pagina_autenticazione/autenticazione.css') }}">

    <!-- Collegamento ai File JavaScript -->
    <script src="{{ asset('pagina_autenticazione/check_email.js') }}" defer></script>

</head>

<!-- BODY -->
<body>
    <h1>Accedi o registrati</h1>

    <button class="pulsante-torna-indietro-check-email">
        <a href="{{ url('home') }}">Torna indietro</a>
    </button>

    <form action="{{ url('pagina_autenticazione/check_email') }}" method="post" name="check_email_form">

        @csrf 

        <label>Ti diamo il benvenuto su Airbnb</label>
        <input type="email" id="email" name="email" placeholder="Email"  value='{{ old("email") }}'>

        <button type="submit" id="pulsante-submit">Continua</button>
    </form>

    @if($error == 'campi_vuoti')
        <div class='errore'>Compilare tutti i campi.</div>
    @endif

    <div id="messaggio-errore"></div>
</body>

</html>
