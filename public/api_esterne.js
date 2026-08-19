// JavaScript per API ESTERNE

// OpenWeatherMap (meteo)
document.getElementById('form-meteo').addEventListener('submit', function(event) {
    event.preventDefault();
    getMeteo();
});

function getMeteo() {
    const cittaRiferimento = document.getElementById('input-citta');
    const dataRiferimento = document.getElementById('input-data');
    const cittaValore = cittaRiferimento.value.trim();
    const dataValore = dataRiferimento.value;

    if (!cittaValore && !dataValore) {
        alert('Per favore, inserisci il nome della città e seleziona una data.');
        return;
    } else if (!cittaValore) {
        alert('Per favore, inserisci il nome della città.');
        return;
    } else if (!dataValore) {
        alert('Per favore, seleziona una data.');
        return;
    }

    fetch(`meteo?city=${encodeURIComponent(cittaValore)}`)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.error) {
                alert(data.error);
                return;
            }
        
            const dataFiltrata = data.list.filter(function(entry) {
                return entry.dt_txt.startsWith(dataValore);
            });

            if (dataFiltrata.length === 0) {
                alert('Nessuna previsione trovata per la data specificata.');
                return;
            }
        
            const meteoCorrente = dataFiltrata[0];
        
            const informazioniMeteo = document.getElementById('informazioni-meteo');
            const h2 = document.createElement('h2');
            const p1 = document.createElement('p');
            const p2 = document.createElement('p');
            const p3 = document.createElement('p');
            const p4 = document.createElement('p');
            const p5 = document.createElement('p');
            const p6 = document.createElement('p');
            const p7 = document.createElement('p');
        
            h2.textContent = `Meteo di ${cittaValore} in data ${dataValore}`;
            p1.textContent = `Temperatura Media: ${kelvinToCelsius(meteoCorrente.main.temp)}°C`;
            p2.textContent = `Temperatura Massima: ${kelvinToCelsius(meteoCorrente.main.temp_max)}°C`;
            p3.textContent = `Temperatura Minima: ${kelvinToCelsius(meteoCorrente.main.temp_min)}°C`;
            p4.textContent = `Umidità: ${meteoCorrente.main.humidity}%`;
            p5.textContent = `Velocità del Vento: ${meteoCorrente.wind.speed} m/s`;
            p6.textContent = `Direzione del Vento: ${degToCompass(meteoCorrente.wind.deg)}`;
            p7.textContent = `Descrizione: ${meteoCorrente.weather[0].description}`;
        
            informazioniMeteo.innerHTML = '';
            informazioniMeteo.appendChild(h2);
            informazioniMeteo.appendChild(p1);
            informazioniMeteo.appendChild(p2);
            informazioniMeteo.appendChild(p3);
            informazioniMeteo.appendChild(p4);
            informazioniMeteo.appendChild(p5);
            informazioniMeteo.appendChild(p6);
            informazioniMeteo.appendChild(p7);
        })
        .catch(function(error) {
            console.error('Si è verificato un errore:', error);
            alert('Errore nel recupero dei dati.');
        });
}

function kelvinToCelsius(kelvin) {
    return (kelvin - 273.15).toFixed(1);
}

function degToCompass(deg) {
    const val = Math.floor((deg / 22.5) + 0.5);
    const direzioni = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
    return direzioni[(val % 16)];
}

// Calendarific (calendario festività)
document.getElementById('form-calendario-festivita').addEventListener('submit', function(event) {
    event.preventDefault();
    getCalendarioFestivita();
});

function getCalendarioFestivita() {
    const codicePaeseRiferimento = document.getElementById('input-codice-paese')
    const annoRiferimento = document.getElementById('input-anno')
    const codicePaeseValore = codicePaeseRiferimento.value.trim()
    const annoValore = annoRiferimento.value

    if (!codicePaeseValore && !annoValore) {
        alert('Per favore, inserisci il codice del Paese e seleziona un anno.');
        return;
    } else if (!codicePaeseValore) {
        alert('Per favore, inserisci il codice del Paese');
        return;
    } else if (!annoValore) {
        alert('Per favore, seleziona un anno.');
        return;
    }

    fetch(`calendario-festivita?country=${codicePaeseValore}&year=${annoValore}`)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            const listaFestivita = document.getElementById('lista-festivita');
            listaFestivita.innerHTML = '';

            for (let i = 0; i < data.response.holidays.length; i++) {
                const festivita = data.response.holidays[i];
                const listItem = document.createElement('li');
                listItem.classList.add('festa');
                listItem.textContent = `${festivita.date.iso} - ${festivita.name}`;
                listaFestivita.appendChild(listItem);
            }
        })
        .catch(function(error) {
            console.error('Si è verificato un errore:', error);
            alert('Errore nel recupero dei dati.');
        });
}

// Spotify (ricerca brani)
document.getElementById('form-brani-musicali').addEventListener('submit', function(event) {
    event.preventDefault();
    getBraniMusicali()
});

function getBraniMusicali(){
    const nomeArtistaRiferimento = document.getElementById('input-nome-artista');
    const nomeArtistaValore = nomeArtistaRiferimento.value.trim();

    if (!nomeArtistaValore.trim()) {
        alert('Per favore, inserisci il nome dell\'artista.');
        return;
    }

    fetch('brani-musicali?artist_name=' + encodeURIComponent(nomeArtistaValore))
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            const outputDiv = document.getElementById('lista-brani');
            outputDiv.innerHTML = ''; 

            for (let i = 0; i < data.length; i++) {
                const brano = data[i];

                const branoElemento = document.createElement('div');
                branoElemento.classList.add('brano');

                const titoloBrano = document.createElement('p');
                titoloBrano.textContent = brano.name;
                branoElemento.appendChild(titoloBrano);

                if (brano.album.images.length > 0) {
                    const copertinaImmagine = document.createElement('img');
                    copertinaImmagine.src = brano.album.images[0].url;
                    copertinaImmagine.alt = 'Copertina del brano';
                    branoElemento.appendChild(copertinaImmagine);

                    const salvataggioButton = document.createElement('button');
                    salvataggioButton.textContent = 'Aggiungi';
                    salvataggioButton.classList.add('pulsante-aggiungi');
                    salvataggioButton.addEventListener('click', function() {
                        salvaBranoMusicaleNeiPreferiti(brano.name, brano.album.images[0].url);
                    });
                    branoElemento.appendChild(salvataggioButton);
                }

                outputDiv.appendChild(branoElemento);
            }
        })
        .catch(function(error) {
            console.error('Si è verificato un errore:', error);
            alert('Errore nel recupero dei dati.');
        });
}

function salvaBranoMusicaleNeiPreferiti(nomeBrano, copertinaBrano) {
    fetch(`aggiungi-preferiti-brani-musicali?nome_brano_musicale=${encodeURIComponent(nomeBrano)}&copertina_brano_musicale=${encodeURIComponent(copertinaBrano)}`)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.success) {
                alert(data.message);
            } else {
                alert(data.message);
            }
        })
        .catch(function(error) {
            console.error('Errore nel salvataggio del brano:', error);
            alert('Errore nel salvataggio del brano.');
        }); 
}

// Google (mappe)
document.addEventListener("DOMContentLoaded", function() {
    const modale = document.getElementById('mappa-modale');
    const pulsanteAperturaModale = document.getElementById("pulsante-mostra-la-mappa-main");
    const pulsanteChiusuraModale = document.querySelector(".pulsante-chiusura-mappa");

    pulsanteAperturaModale.addEventListener("click", function() {
        modale.style.display = "block";
        document.body.classList.add("no-scroll");
        getMappa();
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

function getMappa() {
    const mappa = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 51.505, lng: -0.09}, 
        zoom: 8 
    });

    fetch('mappa')
        .then(function(response) {
            return response.json(); 
        })
        .then(function(data) {
            if (data.error) {
                console.error('Errore nel recupero dei dati:', data.error);
                return;
            }
            for (let i = 0; i < data.length; i++) {
                let posizione = data[i];
                new google.maps.Marker({
                    position: { lat: posizione.lat, lng: posizione.lng },
                    map: mappa
                });
            }
        })
        .catch(function(error) {
            console.error('Si è verificato un errore:', error);
            alert('Errore nel recupero dei dati.');
        });
}
