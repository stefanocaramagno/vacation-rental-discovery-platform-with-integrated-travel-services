// JavaScript per PAGINA di REGISTRAZIONE

// Validazione Form di Registrazione
function validateRegistrazioneForm(event) {
    const form = event.target;
    const username = form.username.value.trim();
    const nome = form.nome.value.trim();
    const cognome = form.cognome.value.trim();
    const data_di_nascita = form.data_di_nascita.value.trim();
    const email = form.email.value.trim();
    const password = form.password.value.trim();
    
    const messaggioErrore = document.getElementById('messaggio-errore');
    
    messaggioErrore.textContent = '';

    if (username === '' ||  
        nome === '' ||     
        cognome === '' ||    
        data_di_nascita === '' ||    
        email === '' ||   
        password === '') {
            messaggioErrore.textContent = "Compilare tutti i campi.";
        event.preventDefault();
        return;
    }

    if (nome[0] !== nome[0].toUpperCase()) {
        messaggioErrore.textContent = "Il nome deve iniziare con una lettera maiuscola.";
        event.preventDefault();
        return;
    }

    if (cognome[0] !== cognome[0].toUpperCase()) {
        messaggioErrore.textContent = "Il cognome deve iniziare con una lettera maiuscola.";
        event.preventDefault();
        return;
    }


    if (!/\d/.test(password)) {
        messaggioErrore.textContent = "La password deve contenere almeno un numero.";
        event.preventDefault();
        return;
    }

    // Crea un oggetto Date utilizzando la data di nascita fornita
    const dataDiNascitaInserita = new Date(data_di_nascita);

    // Crea un oggetto Date che rappresenta la data e l'ora correnti
    const dataAttuale = new Date();

    // Calcola la differenza in millisecondi tra la data attuale e la data di nascita
    const differenzaDate = dataAttuale - dataDiNascitaInserita;

    // Crea un nuovo oggetto Date utilizzando la differenza calcolata
    const etaUtente = new Date(differenzaDate);

    // Calcola l'età assoluta (in anni) sottraendo 1970 dall'anno di 'ageDate' 
    const anniUtente = Math.abs(etaUtente.getUTCFullYear() - 1970);

    if (anniUtente < 18) {
        messaggioErrore.textContent = "Devi avere almeno 18 anni per registrarti.";
        event.preventDefault();
        return;
    }
}

const registrazioneForm = document.forms['registrazione_form'];
registrazioneForm.addEventListener('submit', validateRegistrazioneForm);