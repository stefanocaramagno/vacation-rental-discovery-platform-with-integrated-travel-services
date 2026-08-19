// JavaScript per PAGINA di CHECK EMAIL

// Validazione Form di Check-Email
function validateCheckEmailForm(event) {
    const form = event.target;
    const messaggioErrore = document.getElementById('messaggio-errore');
    
    messaggioErrore.textContent = '';
    
    if(form.email.value.trim() === '') {
        messaggioErrore.textContent = "Compilare il campo Email.";
        event.preventDefault();
    }
}

const emailForm = document.forms['check_email_form'];
emailForm.addEventListener('submit', validateCheckEmailForm);
