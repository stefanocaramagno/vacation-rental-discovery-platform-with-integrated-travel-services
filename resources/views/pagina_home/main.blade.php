<!-- PHP per MAIN CONTENT -->
@section('contenuto_main_specifico')
    <main>

        <!-- Section 1 -->
        <section>
    
            <div id="flex-container-main-section1">
                <!-- Il contenuto viene caricato dinamicamente tramite API REST --> 
            </div> 

            <div id="preferiti-modale">
                <div class="preferiti-contenuto-modale">

                    <!-- Header -->
                    <div class="header-preferiti">
                        <div class="pulsante-chiusura-preferiti">&times;</div>
                        <p class="titolo-header-preferiti">Aggiungi ai preferiti</p>
                    </div>

                    <!-- Main -->
                    <div class="main-preferiti">
                    </div>

                    <!-- Footer -->
                    <div class="footer-preferiti">
                        <button type="button" class="aggiungi-footer-preferiti" data-id="">Aggiungi all'elenco dei preferiti</button>
                    </div>
                </div>
            </div> 
        </section>

        <!-- Section 2 -->
        <section>
            <div id=flex-container1-main-section2>
                <div class="flex-item1-main-section2">
                    <button id="pulsante-mostra-la-mappa-main">Mostra la mappa</button>
                </div>

                <div class="flex-item1-main-section2">
                    <button id="pulsante-visiona-il-meteo-main">Visiona il meteo</button>
                </div>
            </div> 

            <div id="mappa-modale">
                <div class="mappa-modale-contenuto">

                    <!-- Header -->
                    <div class="header-mappa">
                        <div class="pulsante-chiusura-mappa">&times;</div>
                        <p class="titolo-header-mappa">Mappa</p>
                    </div>

                    <!-- Main Content -->
                    <div class="main-mappa">
                        <div id="map"></div>
                    </div>

                </div>
            </div>

            <div id="meteo-modale">
                <div class="meteo-modale-contenuto">

                    <!-- Header -->
                    <div class="header-meteo">
                        <div class="pulsante-chiusura-meteo">&times;</div>
                        <p class="titolo-header-meteo">Meteo</p>
                    </div>

                    <!-- Main Content -->
                    <div class="main-meteo">
                        <form id="form-meteo">

                            @csrf

                            <label>Inserisci il nome della città:</label>
                            <input type="text" id="input-citta" placeholder="Città">

                            <label>Seleziona la data:</label>
                            <input type="date" id="input-data" placeholder="Data">

                            <button type="submit">Ottieni Meteo</button>
                        </form>

                        <div id="informazioni-meteo"></div>  
                    </div>  

                </div>
            </div>

            <div id=flex-container2-main-section2>
                <div class="flex-item2-main-section2">
                    <button id="pulsante-visiona-il-calendario-festivita-main">Visiona i giorni festivi in cui prenotare il tuo alloggio</button>
                </div>

                <div class="flex-item2-main-section2">
                    <button id="pulsante-ricerca-brani-musicali-main">Ricerca i brani musicali da ascolare nel tuo viaggio</button>
                </div>
            </div> 

            <div id="calendario-festivita-modale">
                <div class="calendario-festivita-modale-contenuto">

                    <!-- Header -->
                    <div class="header-calendario-festivita">
                        <div class="pulsante-chiusura-calendario-festivita">&times;</div>
                        <p class="titolo-header-calendario-festivita">Calendario Festività</p>
                    </div>

                    <!-- Main Content -->
                    <div class="main-calendario-festivita">
                        <form id="form-calendario-festivita" action="pagine_homepage/api_esterne.php" method="POST">
                            
                            @csrf
                            
                            <label>Inserisci il codice del Paese:</label>
                            <input type="text" id="input-codice-paese" name="country" placeholder="Codice Paese">
                            <label>Seleziona l'anno</label>
                            <input type="number" id="input-anno" name="year" placeholder="Anno">
                            <button type="submit" id="ottieni-festivita">Ottieni Festività</button>
                        </form> 

                        <div id="lista-festivita">
                            <!-- Il contenuto viene caricato dinamicamente tramite API REST -->                  
                        </div>  
                    </div>  

                </div>
            </div>

            <div id="brani-musicali-modale">
                <div class="brani-musicali-modale-contenuto">

                    <!-- Header -->
                    <div class="header-brani-musicali">
                        <div class="pulsante-chiusura-brani-musicali">&times;</div>
                        <p class="titolo-header-brani-musicali">Brani Musicali</p>
                    </div>

                    <!-- Main Content -->
                    <div class="main-brani-musicali">
                        <form id="form-brani-musicali">

                            @csrf

                            <label>Inserisci l'artita:</label>
                            <input type="text" id="input-nome-artista" placeholder="Artista">

                            <button type="submit">Ottieni Brani</button>
                        </form>

                        <div id="lista-brani"></div>
                    </div> 

                </div>
            </div>
        </section>
        
    </main>
@endsection