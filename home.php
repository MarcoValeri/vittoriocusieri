<?php get_header(); ?>
<div class="home">
    <div class="home__container-carousel">
        <div id="home-carousel-slide-one" class="home__carousel-slide">
            <div class="home__slide-wrapper home__slide-one-wrapper" style="--home-background-one: url('<?= get_site_url(); ?>/images/albero-di-natale.webp')">
                <div class="home__container-slide-title">
                    <h2 class="home__slide-title h1">Prodotti artigianali fatti interamente a mano</h2>
                </div>
                <div class="home__container-slide-button">
                    <a class="button__red" href="<?= get_site_url(); ?>/negozio">Scopri il negozio</a>
                </div>
            </div>
        </div>
        <div id="home-carousel-slide-two" class="home__carousel-slide home__carousel-slide--no-active">
            <div class="home__slide-wrapper home__slide-two-wrapper" style="--home-background-two: url('<?= get_site_url(); ?>/images/albero-di-natale-con-le-luci.webp')">
                <div class="home__container-slide-title">
                    <h2 class="home__slide-title h1">Idee regalo con oggetti fatti a mano e creazioni artigianali</h2>
                </div>
                <div class="home__container-slide-button">
                    <a class="button__red" href="<?= get_site_url(); ?>/negozio">Scopri la magia</a>
                </div>
            </div>
        </div>
        <div id="home-carousel-slide-three" class="home__carousel-slide home__carousel-slide--no-active">
            <div class="home__slide-wrapper home__slide-three-wrapper" style="--home-background-three: url('<?= get_site_url(); ?>/images/candela-di-natale.webp')">
                <div class="home__container-slide-title">
                    <h2 class="home__slide-title h1">Artigianato artistico con statue e pezzi unici</h2>
                </div>
                <div class="home__container-slide-button">
                    <a class="button__red" href="<?= get_site_url(); ?>/negozio">Lasciati incantare</a>
                </div>
            </div>
        </div>
    </div>
    <div class="home__container-negozio">
        <h2 class="h2">Il Negozio di Vittorio Cusieri</h2>
        <h4 class="h4">Scopri gli ulitmi lavori</h4>
        <div class="home__container-button">
            <a class="button__red" href="{{ path('app_statue', {pageNumber: '0'}) }}">Visita il negozio</a>
        </div>
    </div>
    <div class="home__container-about">
        <h2 class="h2">Chi è Vittorio Cusieri</h2>
        <p class="p__l">Lorem Ipsum is simply dummy text of the printing and typesetting industry...<a class="link__red" href="{{ path('app_about') }}">Continua a leggere</a></p>
        <div class="home__container-button">
            <a class="button__red" href="{{ path('app_about') }}">Visita il negozio</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>