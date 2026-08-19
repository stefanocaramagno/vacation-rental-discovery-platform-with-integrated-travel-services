document.addEventListener('DOMContentLoaded', function() {
    aggiornaBraniMusicali();
});

function aggiornaBraniMusicali(){
    fetch('lista-preferiti-brani-musicali')
        .then(function(response) {
            return response.json();
        })
        .then(onJSON)
        .catch(function(error) {
            console.error('Errore nel caricamento dei brani preferiti:', error);
        });
}

function onJSON(data) {
    const listaPreferiti = document.getElementById('lista-preferiti');
    listaPreferiti.innerHTML = '';

    if (data.length > 0) {
        for (let i = 0; i < data.length; i++) {
            const brano = data[i];

            const branoElemento = document.createElement('div');
            branoElemento.classList.add('brano');

            const titoloBrano = document.createElement('p');
            titoloBrano.textContent = brano.nome_brano_musicale;
            branoElemento.appendChild(titoloBrano);

            const copertinaImmagine = document.createElement('img');
            copertinaImmagine.src = brano.copertina_brano_musicale;
            copertinaImmagine.alt = 'Copertina del brano';
            branoElemento.appendChild(copertinaImmagine);

            const rimuoviButton = document.createElement('button');
            rimuoviButton.textContent = 'Rimuovi';
            rimuoviButton.classList.add('pulsante-rimuovi');
            rimuoviButton.addEventListener('click', function() {
                rimuoviBraniMusicaliDaiPreferiti(brano.id);
            });
            branoElemento.appendChild(rimuoviButton);

            listaPreferiti.appendChild(branoElemento);
        }
    } else {
        listaPreferiti.innerText = 'Nessun brano musicale presente nei preferiti.';
    }
}

function rimuoviBraniMusicaliDaiPreferiti(id) {
    fetch('rimuovi-preferiti-brani-musicali?id=' + id)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.success) {
                alert(data.message);
                location.reload();
            } else {
                alert(data.message);
            }
        })
        .catch(function(error) {
            console.error('Errore nella rimozione del brano:', error);
        });
}