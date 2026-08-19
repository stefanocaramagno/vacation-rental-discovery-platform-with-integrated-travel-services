// Caricamento Dinamico del Contenuto dell'Informazioni Immobile del MAIN CONTENT
document.addEventListener('DOMContentLoaded', function() {
    const immobileId = window.location.pathname.split('/').pop(); 
    if (immobileId) {
        aggiornaImmobile(immobileId);
    } else {
        document.getElementById('flex-container-main-section1').innerText = 'ID immobile non valido';
    }
});

function aggiornaImmobile(id) {
    fetch(`informazioni-immobile/${encodeURIComponent(id)}`)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.error) {
                document.getElementById('flex-container-main-section1').innerText = data.error;
            } else {
                onJSON(data.data);
            }
        })
        .catch(function(error) {
            console.error('Errore nella richiesta API:', error);
            document.getElementById('flex-container-main-section1').innerText = 'Errore nel caricamento dei dati.';
        });
}

function onJSON(immobile) {
    const container = document.getElementById('flex-container-main-section1');
    container.innerHTML = '';

    const immagini = [
        immobile.immagine1, 
        immobile.immagine2, 
        immobile.immagine3,
        immobile.immagine4, 
        immobile.immagine5, 
        immobile.immagine6,
        immobile.immagine7, 
        immobile.immagine8, 
        immobile.immagine9
    ];

    for (let i = 0; i < immagini.length; i++) {
        const immagine = immagini[i];
        if (immagine) {
            const divFlexItem = document.createElement('div');
            divFlexItem.classList.add('flex-item-main-section1'); 

            const divImmagine = document.createElement('div');
            divImmagine.classList.add('immagine'); 

            const img = document.createElement('img');
            img.src = `../imgs_immobili_homepage/${immagine}`;
            img.alt = immobile.alt;

            divImmagine.appendChild(img);
            divFlexItem.appendChild(divImmagine);
            container.appendChild(divFlexItem);
        }
    }

    const divDettagli = document.createElement('div');
    divDettagli.classList.add('dettagli-immobile'); 
    const pLuogo = document.createElement('p');
    pLuogo.innerHTML = `<strong>Luogo:</strong> ${immobile.luogo}`;

    const pTipologiaHost = document.createElement('p');
    pTipologiaHost.innerHTML = `<strong>Tipologia Host:</strong> ${immobile.tipologia_host}`;

    const pIntervalloDate = document.createElement('p');
    pIntervalloDate.innerHTML = `<strong>Intervallo Date:</strong> ${immobile.intervallo_date}`;

    const pPrezzo = document.createElement('p');
    pPrezzo.innerHTML = `<strong>Prezzo a Notte:</strong> ${immobile.prezzo} €`;

    divDettagli.appendChild(pLuogo);
    divDettagli.appendChild(pTipologiaHost);
    divDettagli.appendChild(pIntervalloDate);
    divDettagli.appendChild(pPrezzo);

    container.appendChild(divDettagli);
}
