// JavaScript per NAVIGATION BAR (Section 2)

// Barra di Scorrimento 
document.addEventListener('DOMContentLoaded', function() {
  const contenitore = document.getElementById('flex-container1-nav-section2');
  const pulsanteSinistra = document.getElementById('pulsante-scorrimento-a-sinistra');
  const pulsanteDestra = document.getElementById('pulsante-scorrimento-a-destra');
  const passoScorrimento = 750;

  pulsanteSinistra.addEventListener('click', function() {
      const posizioneCorrente = contenitore.scrollLeft;
      const nuovaPosizione = posizioneCorrente - passoScorrimento;

      contenitore.scrollTo({
          left: nuovaPosizione,
          behavior: 'smooth'
      });
  });

  pulsanteDestra.addEventListener('click', function() {
    let posizioneCorrente = contenitore.scrollLeft;
    let nuovaPosizione = posizioneCorrente + passoScorrimento;
    const massimoScorrimento = contenitore.scrollWidth - contenitore.clientWidth;

    if (nuovaPosizione > massimoScorrimento) {
        nuovaPosizione = massimoScorrimento;
    }
    
    contenitore.scrollTo({
        left: nuovaPosizione,
        behavior: 'smooth'
    });
  });
});

// Pulsante Filtri
document.addEventListener("DOMContentLoaded", function() {
  const modale = document.getElementById('filtri-modale');
  const pulsanteAperturaModale = document.getElementById("pulsante-filtri");
  const pulsanteChiusuraModale = document.querySelector(".pulsante-chiusura-filtri");

  pulsanteAperturaModale.addEventListener("click", function() {
    modale.style.display = "block";
    document.body.classList.add("no-scroll");
  });

  pulsanteChiusuraModale.addEventListener("click", function() {
    modale.style.display = "none";
    document.body.classList.remove("no-scroll");
  });

  window.addEventListener("click", function(event) {
    if (event.target == modale) {
      modale.style.display = "none";
      document.body.classList.remove("no-scroll");
    }
  });
});
