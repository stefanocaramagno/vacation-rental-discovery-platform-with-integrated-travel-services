<!DOCTYPE html>
<html lang="it">

<!-- HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Stefano Caramagno">

    <title>Registrazione</title>

    <link rel="shortcut icon" href="{{ asset('imgs_loghi_homepage/favicon.ico') }}" type="image/x-icon">

    <!-- Collegamento ai File CSS -->
    <link rel="stylesheet" href="{{ asset('pagina_autenticazione/autenticazione.css') }}">

    <!-- Collegamento ai File JavaScript -->
    <script src="{{ asset('pagina_autenticazione/registrazione.js') }}" defer></script>
    
</head>

<!-- BODY -->
<body>
    <h1>Completa la registrazione</h1>

    <button class="pulsante-torna-indietro-registrazione">
        <a href="{{ url('pagina_autenticazione/check_email') }}">Torna indietro</a>
    </button>

    <form action="{{ url('pagina_autenticazione/registrazione') }}" method="post" name="registrazione_form">

        @csrf 
        
        <label>Username</label>
        <input type="text" id="username" name="username" placeholder="Username" value='{{ old("username") }}'>

        <label>Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Nome indicato sul documento" value='{{ old("nome") }}'>

        <label>Cognome</label>
        <input type="text" id="cognome" name="cognome" placeholder="Cognome indicato sul documento" value='{{ old("cognome") }}'>

        <label>Data di Nascita</label>
        <input type="date" id="data_di_nascita" name="data_di_nascita" placeholder="Data di nascita" value='{{ old("data_di_nascita") }}'>

        <label>Contact info</label>
        <input type="email" id="email" name="email" placeholder="Email" value='{{ old("email") }}'>

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Password" value='{{ old("password") }}'>

        <button type="submit" id="pulsante-submit">Accetta e continua</button>
    </form>

    <div id="messaggio-errore"></div>

    @if($error == 'campi_vuoti')
        <div class='errore'>Compilare tutti i campi.</div>
    @elseif($error == 'username_esistente')
        <div class='errore'>Username gia esistente.</div>
    @elseif($error == 'email_esistente')
        <div class='errore'>Email gia esistente.</div>
    @elseif($error == 'eta_minorenne')
        <div class='errore'>Devi avere almeno 18 anni per registrarti.</div>
    @elseif($error == 'inziale_nome_minuscola')
        <div class='errore'>Il nome deve iniziare con una lettera maiuscola.</div>
    @elseif($error == 'inziale_cognome_minuscola')
        <div class='errore'>Il cognome deve iniziare con una lettera maiuscola.</div>
    @elseif($error == 'password_senza_numeri')
        <div class='errore'>La password deve contenere almeno un numero.</div>
    @endif
    
</body>

</html>
