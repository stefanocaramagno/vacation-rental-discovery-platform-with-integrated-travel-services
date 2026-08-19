// JavaScript per FOOTER 

// Barra di Ispirazione Viaggi
document.addEventListener("DOMContentLoaded", function() {
    const contenuti = document.querySelectorAll('.pulsante-barra-ispirazione-viaggi');

    contenuti.forEach(function(pulsante) {
        pulsante.addEventListener('click', function() {
            const idContenuto = pulsante.id.replace('pulsante-', '');
            AttivaDisattivaContenuto(idContenuto);
        });
    });

    const primoIdContenuto = 'contenuto1-pulsante-barra-ispirazione-viaggi';
    AttivaDisattivaContenuto(primoIdContenuto);
});

function AttivaDisattivaContenuto(idContenuto) {
    const contenuti = document.querySelectorAll('.flex-container-footer-section1');

    contenuti.forEach(function(contenuto) {
        contenuto.classList.remove('active');
    });

    const contenutoSelezionato = document.getElementById(idContenuto);
    if (contenutoSelezionato) {
        contenutoSelezionato.classList.add('active');
    }

    const pulsanti = document.querySelectorAll('.pulsante-barra-ispirazione-viaggi');

    pulsanti.forEach(function(pulsante) {
        pulsante.style.fontWeight = 'normal';
    });

    const pulsanteSelezionato = document.getElementById('pulsante-' + idContenuto);
    if (pulsanteSelezionato) {
        pulsanteSelezionato.style.fontWeight = 'bold';
    }
}


// Mostra Altro del Contenuto della di Barra di Ispirazione Viaggi
document.addEventListener("DOMContentLoaded", function() {
    const pulsanteMostraAltro = document.getElementById("pulsante-mostra-altro-footer");
    const elementiNascosti = document.querySelectorAll(".lista-visibile .elemento-nascosto");
    
    pulsanteMostraAltro.addEventListener("click", function() {
        elementiNascosti.forEach(function(elemento) {
            elemento.classList.toggle("elemento-nascosto");
        });

        pulsanteMostraAltro.style.display = "none";
    });
});