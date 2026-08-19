// JavaScript per MAIN CONTENT

// Scorrimento Immagini degli Immobili
function cambiaImmagine(id, direzione) {

  // Array di immagini corrispondente all'id (dichiarato con const perché non riassegnato)
  const immagini = window['immagini' + id];

  // Elemento dell'immagine corrente
  const elemImmagine = document.querySelector('img[data-id="' + id + '"]');

  // Testo alternativo dell'immagine corrente (dichiarato con const perché non riassegnato)
  const testoAlternativo = elemImmagine.alt;

  /* 
  immagini.indexOf(elemImmagine.src.split('/').pop() trova l'indice di questa immagine nell'array immagini. 
  */
  const indiceCorrente = immagini.indexOf(elemImmagine.src.split('/').pop());

  let nuovoIndice = indiceCorrente + direzione;
  if (nuovoIndice >= immagini.length) 
    nuovoIndice = 0;
  if (nuovoIndice < 0) 
    nuovoIndice = immagini.length - 1;

  elemImmagine.src = 'imgs_immobili_homepage/' + immagini[nuovoIndice];
  elemImmagine.alt = testoAlternativo;
}

function cuoreModale() {
  document.querySelectorAll('.cuore-sovrapposto').forEach(function(cuoreSovrapposto) {
    cuoreSovrapposto.addEventListener('click', function(event) {

        fetch('utente-loggato')
            .then(response => response.json())
            .then(data => {

                if (data.logged_in) {
                    document.getElementById("preferiti-modale").style.display = "block";
                    const immobileId = this.dataset.id; 
                    const addButton = document.querySelector('.aggiungi-footer-preferiti'); 
                    addButton.setAttribute('data-id', immobileId); 
                } else {
                    document.getElementById("autenticazione-modale").style.display = "block";
                }
            })
            .catch(error => {
                console.error('Errore durante il recupero dello stato dell\'utente:', error);
            });

        event.preventDefault();
        document.body.classList.add("no-scroll");
    });
  });

  const pulsanteChiusuraModalePreferiti = document.querySelector(".pulsante-chiusura-preferiti");
  pulsanteChiusuraModalePreferiti.addEventListener('click', function() {
      document.getElementById("preferiti-modale").style.display = "none";
      document.body.classList.remove("no-scroll");
  });

  const pulsanteChiusuraModaleAutenticazione = document.querySelector(".pulsante-chiusura-autenticazione");
  pulsanteChiusuraModaleAutenticazione.addEventListener('click', function() {
      document.getElementById("autenticazione-modale").style.display = "none";
      document.body.classList.remove("no-scroll");
  });

  window.addEventListener('click', function(event) {
    const modalePreferiti = document.getElementById("preferiti-modale");
    const modaleAutenticazione = document.getElementById("autenticazione-modale");

      if (event.target == modalePreferiti) {
          modalePreferiti.style.display = "none";
          document.body.classList.remove("no-scroll");
      } else if (event.target == modaleAutenticazione) {
          modaleAutenticazione.style.display = "none";
          document.body.classList.remove("no-scroll");
      }
  });
}

// Pulsante Visiona il Meteo
document.addEventListener("DOMContentLoaded", function() {
  const modale = document.getElementById('meteo-modale');
  const pulsanteAperturaModale = document.getElementById("pulsante-visiona-il-meteo-main");
  const pulsanteChiusuraModale = document.querySelector(".pulsante-chiusura-meteo");

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

// Pulsante Visiona il Calendario Festivita
document.addEventListener("DOMContentLoaded", function() {
  const modale = document.getElementById('calendario-festivita-modale');
  const pulsanteAperturaModale = document.getElementById("pulsante-visiona-il-calendario-festivita-main");
  const pulsanteChiusuraModale = document.querySelector(".pulsante-chiusura-calendario-festivita");

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

// Pulsante Ricerca di Brani Musicali
document.addEventListener("DOMContentLoaded", function() {
  const modale = document.getElementById('brani-musicali-modale');
  const pulsanteAperturaModale = document.getElementById("pulsante-ricerca-brani-musicali-main");
  const pulsanteChiusuraModale = document.querySelector(".pulsante-chiusura-brani-musicali");

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
