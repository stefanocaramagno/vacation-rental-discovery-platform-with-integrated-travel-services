<!-- PHP per NAVIGATION BAR (Section 2) -->
<section>
    
    <div id="flex-container1-nav-section2">
        <!-- Il contenuto viene caricato dinamicamente tramite API REST --> 
    </div>

    <div id="flex-container2-nav-section2">
        <div class="flex-item2-nav-section2">
            <button id="pulsante-scorrimento-a-sinistra">&lt;</button>
        </div>

        <div class="flex-item2-nav-section2">
            <button id="pulsante-scorrimento-a-destra">&gt;</button>    
            <button id="pulsante-filtri">Filtri</button>
        </div>  
    </div>

    <div id="filtri-modale">
        <div class="filtri-contenuto-modale">
            
            <!-- Header -->
            <div class="header-filtri">
                <div class="pulsante-chiusura-filtri">&times;</div>
                <p class="titolo-header-filtri">Filtri</p>
            </div>

            <!-- Main Content -->
            <div class="main-filtri">

                <!-- Section 1 -->
                <div class="sezione-filtri" id="sezione1-filtri">
                    <p class="titolo-sezione-filtri">Tipo di alloggio</p>
                    <p>Cerca stanze, case intere e qualsiasi tipo di alloggio</p>

                    <div class="flex-container-sezione1-filtri">
                        <button class="flex-item-sezione1-filtri">Qualsiasi tipo</button>
                        <button class="flex-item-sezione1-filtri">Stanza</button>
                        <button class="flex-item-sezione1-filtri">Casa intera</button>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Fascia di prezzo</p>
                    <p>Prezzi giornalieri, costi e tasse incluse</p>

                    <div class="flex-container-mini-sezione2-filtri"></div>
                        <ul class="flex-item-mini-sezione2-filtri">
                            <li>
                                <form>
                                    <label>Minimo</label> 
                                    <input type="text">
                                </form>
                            </li>
                        </ul>

                        <ul class="flex-item-mini-sezione2-filtri">
                            <li>
                                <form>
                                    <label>Massimo</label> 
                                    <input type="text">
                                </form>
                            </li>
                        </ul>
                    </div>

                <!-- Section 3 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Stanze e letti</p>

                    <p>Camere da letto</p>

                    <div class="flex-container-mini-sezione3-filtri">
                        <button class="flex-item-mini-sezione3-filtri">Qualsiasi</button>
                        <button class="flex-item-mini-sezione3-filtri">1</button>
                        <button class="flex-item-mini-sezione3-filtri">2</button>
                        <button class="flex-item-mini-sezione3-filtri">3</button>
                        <button class="flex-item-mini-sezione3-filtri">4</button>
                        <button class="flex-item-mini-sezione3-filtri">5</button>
                        <button class="flex-item-mini-sezione3-filtri">6</button>
                        <button class="flex-item-mini-sezione3-filtri">7</button>
                        <button class="flex-item-mini-sezione3-filtri">8+</button>
                    </div>          

                    <p>Letti</p>

                    <div class="flex-container-mini-sezione3-filtri">
                        <button class="flex-item-mini-sezione3-filtri">Qualsiasi</button>
                        <button class="flex-item-mini-sezione3-filtri">1</button>
                        <button class="flex-item-mini-sezione3-filtri">2</button>
                        <button class="flex-item-mini-sezione3-filtri">3</button>
                        <button class="flex-item-mini-sezione3-filtri">4</button>
                        <button class="flex-item-mini-sezione3-filtri">5</button>
                        <button class="flex-item-mini-sezione3-filtri">6</button>
                        <button class="flex-item-mini-sezione3-filtri">7</button>
                        <button class="flex-item-mini-sezione3-filtri">8+</button>
                    </div>  

                    <p>Bagni</p>

                    <div class="flex-container-mini-sezione3-filtri">
                        <button class="flex-item-mini-sezione3-filtri">Qualsiasi</button>
                        <button class="flex-item-mini-sezione3-filtri">1</button>
                        <button class="flex-item-mini-sezione3-filtri">2</button>
                        <button class="flex-item-mini-sezione3-filtri">3</button>
                        <button class="flex-item-mini-sezione3-filtri">4</button>
                        <button class="flex-item-mini-sezione3-filtri">5</button>
                        <button class="flex-item-mini-sezione3-filtri">6</button>
                        <button class="flex-item-mini-sezione3-filtri">7</button>
                        <button class="flex-item-mini-sezione3-filtri">8+</button>
                    </div>  
                </div>

                <!-- Section 4 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Alloggi di prima scelta</p>

                    <button class="container-mini-sezione4-filtri">
                        <p><strong>Amati dagli ospiti</strong></p>
                        <p>Gli alloggi più amati dagli ospiti di Airbnb</p>
                    </button>
                </div>

                <!-- Section 5 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Tipo di alloggio</p>

                    <div class="flex-container-mini-sezione5-filtri">
                        <button class="flex-item-mini-sezione5-filtri">Casa indipendente</button>
                        <button class="flex-item-mini-sezione5-filtri">Appartamento</button>
                        <button class="flex-item-mini-sezione5-filtri">Pensione</button>
                        <button class="flex-item-mini-sezione5-filtri">Hotel</button>
                    </div>

                </div>

                <!-- Section 6 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Servizi</p>

                    <p class="titolo-mini-sezione-filtri">Servizi essenziali</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Wi-fi</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Lavatrice</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Aria condizionata</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Spazio di lavoro dedicato</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Ascigacapelli</label>
                                </form>
                            </li>
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Cucina</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Asciugatrice</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Riscaldamento</label>
                                </form> 
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>TV</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Ferro da stiro</label>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <p class="titolo-mini-sezione-filtri">Caratteristiche</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Piscina</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Parcheggio gratuito</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Culla</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Palestra</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Colazione</label>
                                </form>
                            </li>                            
                        
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>È permesso fumare</label>
                                </form>
                            </li>   
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Idromassaggio</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Postazione di ricarica per veicoli elettrici</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Letto matrimoniale grande</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Griglia per barbecue</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Camino</label>
                                </form>
                            </li> 
                        </ul>
                    </div>

                    <p class="titolo-mini-sezione-filtri">Posizione</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Lungo la spiaggia</label>
                                </form>
                            </li>
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Lungo la riva</label>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <p class="titolo-mini-sezione-filtri">Protezione</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Allarme antincendio</label>
                                </form>
                            </li>
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Rilevatore di monossido di carbonio</label>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 7 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Opzione di prenotazione</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <p><strong>Prenotazione immediata</strong></p>
                                <p>Annunci prenotabili senza dover aspettare l'approvazione dell'host</p>
                            </li>

                            <li>
                                <p><strong>Self check-in</strong></p>
                                <p>Facile accesso alla proprietà una volta a destinazione</p>
                            </li>

                            <li>
                                <p><strong>È permessa la presenza di animali domestici</strong></p>
                                <p>Viaggi con animale di servizio?</p>    
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 8 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Caratteristiche di accessibilità</p>

                    <p class="titolo-mini-sezione-filtri">Ingresso e pargheggio per gli ospiti</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Ingresso degli ospiti senza gradini</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Posto auto accessibile</label>
                                </form>
                            </li> 
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Ingresso degli ospiti di larghezza superiore a 81cm</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Percorso senza gradini fino all'ingresso degli ospiti</label>
                                </form>
                            </li> 
                        </ul>
                    </div>

                    <p class="titolo-mini-sezione-filtri">Camera da letto</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Accesso alla camera da letto senza gradini</label>
                                </form>
                            </li>
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Ingresso della camera da letto di larghezza superiore a 81cm</label>
                                </form>
                            </li> 
                        </ul>
                    </div>

                    <p class="titolo-mini-sezione-filtri">Bagno</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Accesso al bagno senza gradini</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Barra di sostegno per la doccia</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Doccia senza gradini</label>
                                </form>
                            </li> 
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Ingresso della camera da letto di larghezza superiore a 81cm</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Barra di sostegno per WC</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Seduta per la doccia o vasca</label>
                                </form>
                            </li> 
                        </ul>
                    </div>

                    <p class="titolo-mini-sezione-filtri">Attrezzatura adattiva</p>

                    <div class="flex-container-mini-sezione6-filtri">
                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>Sollevatore a soffitto mobile</label>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 9 -->
                <div class="sezione-filtri">
                    <p class="titolo-sezione-filtri">Lingua dell'Host</p>

                    <div class="flex-container-mini-sezione6-filtri">

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>inglese</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>tedesco</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>italiano</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>spagnolo</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>arabo</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>turco</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>olandese</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>lingua dei segni</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>polacco</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>svedese</label>
                                </form>
                            </li>

                            <li>
                                </form>
                                    <input type="checkbox">
                                    <label>ceco</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>ucraino</label>
                                </form>
                            </li> 
                        </ul>

                        <ul class="flex-item-mini-sezione6-filtri">
                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>francese</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>giapponese</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>russo</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>cinese (semplificato)</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>portoghese</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>indonesiano</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>greco</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>ebraico</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>danese</label>
                                </form>
                            </li> 

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>norvegese</label>
                                </form>
                            </li>

                            <li>
                                <form>
                                    <input type="checkbox">
                                    <label>ungherese</label>
                                </form>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer-filtri">
                <button class="cancella-footer-filtri">Cancella tutto</button>
                <button class="mostra-alloggi-footer-filtri">Mostra 686 alloggi</button>
            </div>
        </div>
    </div> 
    
</section>  