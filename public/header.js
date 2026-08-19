// JavaScript per HEADER

// Menu a Tendina 
document.addEventListener("DOMContentLoaded", function() {
    const menuTendina = document.querySelector(".menu-a-tendina-header");
    const contenutoMenuTendina = document.querySelector(".contenuto-menu-a-tendina-header");

    menuTendina.addEventListener("click", function() {

        // Alterna la classe 'show' sul contenuto del menu a tendina per mostrarlo o nasconderlo
        contenutoMenuTendina.classList.toggle("show");
    });

    // Aggiunge un listener per l'evento 'click' sul documento
    document.addEventListener("click", function(evento) {
        
        // Se il click non è avvenuto all'interno del menu a tendina, rimuove la classe 'show' dal contenuto del menu a tendina
        if (!menuTendina.contains(evento.target)) {
            contenutoMenuTendina.classList.remove("show");
        }
    });
});
