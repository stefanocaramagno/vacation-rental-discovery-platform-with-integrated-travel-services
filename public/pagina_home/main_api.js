// Caricamento Dinamico del Contenuto degli Immobili del MAIN CONTENT
document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll('.flex-item1-nav-section2');
    for (let i = 0; i < items.length; i++) {
        items[i].addEventListener('click', function(event) {
            event.preventDefault();
            const tipologia = this.getAttribute('data-tipologia');
            aggiornaImmobili(tipologia);
        });
    }

    aggiornaImmobili('Sull\'acqua');
});

function aggiornaImmobili(tipologia) {
    fetch(`immobili?tipologia=${encodeURIComponent(tipologia)}`)
        .then(function(response) {
            return response.json();
        })
        .then(onJSON)
        .catch(function(error) {
            console.error('Errore nel recuperare i dati:', error);
            document.getElementById('flex-container-main-section1').innerHTML = 'Errore nel caricamento dei dati.';
        });
}

function onJSON(data) {
    const container = document.getElementById('flex-container-main-section1');
    container.innerHTML = '';

    if (data.length > 0) {
        for (let i = 0; i < data.length; i++) {
            const row = data[i];
            const immagini = [
                row.immagine1, 
                row.immagine2, 
                row.immagine3,
                row.immagine4, 
                row.immagine5, 
                row.immagine6,
                row.immagine7, 
                row.immagine8, 
                row.immagine9
            ];

            const a = document.createElement('a');
            a.href = `immobile/${row.id}`;
            a.classList.add('link-immagine'); 
            
            const divFlexItem = document.createElement('div');
            divFlexItem.classList.add('flex-item-main-section1');

            const divImmagine = document.createElement('div');
            divImmagine.classList.add('immagine'); 

            const img = document.createElement('img');
            img.src = `imgs_immobili_homepage/${row.immagine1}`;
            img.alt = row.alt;
            img.dataset.id = row.id;
            img.classList.add('immagine-attiva'); 

            const divPulsanti = document.createElement('div');
            divPulsanti.classList.add('pulsanti-scorrimento'); 

            const btnSinistra = document.createElement('button');
            btnSinistra.classList.add('pulsante-scorrimento', 'sinistra'); 
            btnSinistra.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                cambiaImmagine(row.id, -1);
            });
            btnSinistra.innerHTML = '&lt;';

            const btnDestra = document.createElement('button');
            btnDestra.classList.add('pulsante-scorrimento', 'destra'); 
            btnDestra.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                cambiaImmagine(row.id, 1);
            });
            btnDestra.innerHTML = '&gt;';

            divPulsanti.appendChild(btnSinistra);
            divPulsanti.appendChild(btnDestra);

            divImmagine.appendChild(img);
            divImmagine.appendChild(divPulsanti);

            if (row.amato_dagli_ospiti == 1) {
                const divSovrapposizione = document.createElement('div');
                divSovrapposizione.classList.add('sovrapposizione'); 

                const divEtichetta = document.createElement('div');
                divEtichetta.classList.add('etichetta-sovrapposta');
                divEtichetta.innerHTML = 'Amato dagli ospiti';

                divSovrapposizione.appendChild(divEtichetta);
                divImmagine.appendChild(divSovrapposizione);
            }

            const cuoreSovrapposto = document.createElement('div');
            cuoreSovrapposto.classList.add('cuore-sovrapposto'); 
            cuoreSovrapposto.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                cuoreModale();
            });

            cuoreSovrapposto.dataset.id = row.id;
            cuoreSovrapposto.innerHTML = '&hearts;';
            divImmagine.appendChild(cuoreSovrapposto);

            divFlexItem.appendChild(divImmagine);

            const divInfo = document.createElement('div');
            const pLuogo = document.createElement('p');
            pLuogo.id = 'luogo-immobile';
            pLuogo.classList.add('luogo-immobile'); 
            pLuogo.innerHTML = row.luogo;

            const pTipologiaHost = document.createElement('p');
            pTipologiaHost.id = 'tipologia-host';
            pTipologiaHost.innerHTML = row.tipologia_host;

            const pIntervalloDate = document.createElement('p');
            pIntervalloDate.id = 'intervallo-date';
            pIntervalloDate.innerHTML = row.intervallo_date;

            const pPrezzo = document.createElement('p');
            pPrezzo.id = 'prezzo-a-notte';
            pPrezzo.innerHTML = `<strong>${row.prezzo} €</strong> notte`;

            divInfo.appendChild(pLuogo);
            divInfo.appendChild(pTipologiaHost);
            divInfo.appendChild(pIntervalloDate);
            divInfo.appendChild(pPrezzo);

            divFlexItem.appendChild(divInfo);

            a.appendChild(divFlexItem);
            container.appendChild(a);

            window[`immagini${row.id}`] = immagini;
        }
    } else {
        container.innerText = 'Nessun immobile presente di questa tipologia.';
    }
}

// Aggiunta Dinamica del Contenuto degli Immobili Preferiti del MAIN CONTENT
document.addEventListener("DOMContentLoaded", function() {
    const aggiungiButton = document.querySelector('.aggiungi-footer-preferiti');
    aggiungiButton.addEventListener('click', function(event) {
        event.preventDefault();
        const immobileId = this.getAttribute('data-id');
        aggiungiAiPreferiti(immobileId);
    });
});


function aggiungiAiPreferiti(immobileId) {
    fetch(`aggiungi-preferiti-immobili?immobile_id=${encodeURIComponent(immobileId)}`)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            alert(data.message);
            window.location.href = 'preferiti_immobili';
        })
        .catch(function(error) {
            console.error('Errore durante l\'aggiunta ai preferiti:', error.message);
        });
}
