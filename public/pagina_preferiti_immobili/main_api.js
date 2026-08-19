// Immobili del Main Content
document.addEventListener('DOMContentLoaded', function() {
    aggiornaImmobiliPreferiti();
});

function aggiornaImmobiliPreferiti() {
    fetch('lista-immobili-preferiti')
        .then(function(response) {
            return response.json();
        })
        .then(onJSON)
        .catch(function(error) {
            console.error('Errore nella richiesta API:', error);
            const container = document.getElementById('flex-container-main-section1');
            container.innerText = 'Errore nel caricamento dei dati.';
        });
}

function onJSON(json) {
    const container = document.getElementById('flex-container-main-section1');
    container.innerHTML = '';

    if (json.length > 0) {
        for (let i = 0; i < json.length; i++) {
            const immobile = json[i];

            const divFlexItem = document.createElement('div');
            divFlexItem.classList.add('flex-item-main-section1'); 

            const divImmagine = document.createElement('div');
            divImmagine.classList.add('immagine'); 

            const img = document.createElement('img');
            img.src = `imgs_immobili_homepage/${immobile.immagine1}`;
            img.alt = immobile.alt;
            img.dataset.id = immobile.id;
            img.classList.add('immagine-attiva');

            if (immobile.amato_dagli_ospiti == 1) {
                const divSovrapposizione = document.createElement('div');
                divSovrapposizione.classList.add('sovrapposizione'); 

                const divEtichetta = document.createElement('div');
                divEtichetta.classList.add('etichetta-sovrapposta'); 
                divEtichetta.innerHTML = 'Amato dagli ospiti';

                divSovrapposizione.appendChild(divEtichetta);
                divImmagine.appendChild(divSovrapposizione);
            }

            divImmagine.appendChild(img);
            divFlexItem.appendChild(divImmagine);

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

            divFlexItem.appendChild(divDettagli);

            const rimuoviPreferitiButton = document.createElement('button');
            rimuoviPreferitiButton.innerText = 'Rimuovi';
            rimuoviPreferitiButton.classList.add('pulsante-rimuovi'); 
            rimuoviPreferitiButton.addEventListener('click', function() {
                rimuoviPreferiti(immobile.id);
            });

            divFlexItem.appendChild(rimuoviPreferitiButton);

            container.appendChild(divFlexItem);
        }
    } else {
        container.innerText = 'Nessun immobile presente nei preferiti.';
    }
}

function rimuoviPreferiti(immobileId) {
    fetch(`rimuovi-preferiti-immobili/${immobileId}`)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            alert(data.message);
            location.reload();
        })
        .catch(function(error) {
            console.error('Errore durante la rimozione dai preferiti:', error.message);
        });
}
