<!-- PHP per NAVIGATION BAR (Section 1) -->
<section class="nav_section1">

    <div id="flex-container-nav-section1">
        <div class="flex-item-nav-section1">
            <form>
                <label>Dove</label>
                <input type="text" placeholder="Cerca destinazioni">
            </form>
        </div>

        <div class="flex-item-nav-section1">
            <form>
                <label>Check-in</label>
                <input type="date" placeholder="Aggiungi date">
            </form> 
        </div>

        <div class="flex-item-nav-section1">
            <form>
                <label>Check-out</label>
                <input type="date" placeholder="Aggiungi date">
            </form>  
        </div>

        <div class="flex-item-nav-section1 menu-a-tendina">
            <form>
                <label>Chi </label> 
                <input type="text" placeholder="Aggiungi ospiti">
            </form> 
        
            <div class="contenuto-menu-a-tendina">
                <div class="categoria" id="categoria1">
                    <form>
                        <label><strong>Adulti</strong><br>Da 13 in su</label>
                        <input type="number">  
                    </form>
                </div>
                
                <div class="categoria" id="categoria2">
                    <form>
                        <label><strong>Bambini</strong><br>Età 2 - 12</label>
                        <input type="number">  
                    </form>
                </div>
                
                <div class="categoria" id="categoria3">
                    <form>
                        <label><strong>Neonati</strong><br>Fino a 2 anni</label>
                        <input type="number">  
                    </form>
                </div>
        
                <div class="categoria" id="categoria4">
                    <form>
                        <label><strong>Animali domestici</strong><br>Viaggi con un animale di servizio?</label>
                        <input type="number">  
                    </form>
                </div>
            </div>
        </div>

        <div class="flex-item-nav-section1"  id="pulsante-ricerca">
            <button type="submit">
                <a href="#" >
                    <img src="{{ asset('imgs_loghi_homepage/icona_lente_di_ingrandimento.png') }}" alt="icona_ricerca">
                </a>
            </button>
        </div>
    </div>  
          
</section> 