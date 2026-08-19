// JavaScript per NAVIGATION BAR (Section 1)

// Menu a Tendina
document.addEventListener('DOMContentLoaded', function () {
    const tendina = document.querySelector('.menu-a-tendina');
    const contenutoTendina = document.querySelector('.contenuto-menu-a-tendina');
  
    function apriTendina() {
        contenutoTendina.style.display = 'block';
    }
  
    function chiudiTendina() {
        contenutoTendina.style.display = 'none';
    }

    tendina.addEventListener('click', function (evento) {
        evento.stopPropagation(); 
        apriTendina();
    });
  
    document.addEventListener('click', function (evento) {
        const cliccatoDentroTendina = tendina.contains(evento.target);
        if (!cliccatoDentroTendina) {
            chiudiTendina();
        }
    });
});