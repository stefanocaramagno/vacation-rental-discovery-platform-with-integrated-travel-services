// JavaScript per FOOTER (Section 1)

// Risposte alle Domande a Comparsa
document.addEventListener('DOMContentLoaded', function() {
    const elementiDomanda = document.querySelectorAll('.domanda');

    // Aggiungi un listener per l'evento 'click' a ciascun elemento domanda
    elementiDomanda.forEach(function(domanda) {
        domanda.addEventListener('click', function() {
            
            // Seleziona l'elemento successivo a quello cliccato (la risposta)
            const risposta = this.nextElementSibling;

            // Alterna la classe 'show' per visualizzare o nascondere la risposta
            risposta.classList.toggle('show');
        });
    });
});