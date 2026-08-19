// JavaScript per PAGINA di LOGIN

// Validazione Form di Login
function validateLoginForm(event) {
    const form = event.target;
    const messaggioErrore = document.getElementById('messaggio-errore');
    
    messaggioErrore.textContent = '';
    
    if(form.password.value.trim() === '') {
        messaggioErrore.textContent = "Compilare tutti i campi.";
        event.preventDefault();
    }
}

const loginForm = document.forms['login_form'];
loginForm.addEventListener('submit', validateLoginForm);