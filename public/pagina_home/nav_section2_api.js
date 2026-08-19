// Caricamento Dinamico del Contenuto delle Tipologie Alloggo della NAVIGATION BAR (Section 2)
document.addEventListener("DOMContentLoaded", function() {
    aggiornaLoghi();
});

function aggiornaLoghi() {
    fetch('tipologie-alloggio')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            const container = document.getElementById('flex-container1-nav-section2');
            container.innerHTML = '';

            for (let i = 0; i < data.length; i++) {
                const item = data[i];

                const div = document.createElement('div');
                div.classList.add('flex-item1-nav-section2');
                div.setAttribute('data-tipologia', item.tipologia);
                
                const linkImg = document.createElement('a');
                linkImg.setAttribute('href', '#');

                const img = document.createElement('img');
                img.setAttribute('src', 'imgs_loghi_homepage/' + item.immagine);
                img.setAttribute('alt', item.alt);
                img.classList.add('logo');

                const linkTipologia = document.createElement('a');
                linkTipologia.setAttribute('href', '#');
                linkTipologia.classList.add('tipologia');
                linkTipologia.textContent = item.tipologia;

                div.addEventListener('click', function() {
                    const tipologia = this.getAttribute('data-tipologia');
                    aggiornaImmobili(tipologia);
                });

                linkImg.appendChild(img);
                div.appendChild(linkImg);
                div.appendChild(linkTipologia);

                container.appendChild(div);
            }
        })
        .catch(function(error) {
            console.error('Errore durante il caricamento dei dati:', error);
        });
}

