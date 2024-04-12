<div class="statues">
    <div class="statues__container-products">
        <!-- LOOP START -->
        <div class="statua-card">
            <div class="statua-card__wrapper">
                <div class="statua-card__container-image">
                    <img class="statua-card__image" src="../images/{{ image }}" alt="{{ image }}" />
                </div>
                <div class="statua-card__container-title">
                    <h2 class="h2">{{ name }}</h2>
                </div>
                <div class="statua-card__container-description">
                    <p class="p__xl">{{ description|striptags|slice(0, 40) }}...</p>
                </div>
                <div class="statua-card__container-quantity">
                    <p class="p__l">Pezzi disponibili: {{ quantity }}</p>
                </div>
                <div class="statua-card__container-price">
                    <ul class="statua-card__menu-price">
                        <li><p class="p">Prezzo: €{{ price }}</p></li>
                        <li><p class="p">Spedizione: €{{ shipping }}</p></li>
                        <li><p class="p">Totale: €{{ price + shipping }}</p></li>
                    </ul>
                </div>
                <div class="statua-card__container-btn">
                    <a class="button__red" href="/statua/{{ url }}">Scopri di più</a>
                </div>
            </div>
        </div>
        <!-- LOOP END -->
    </div>
</div>