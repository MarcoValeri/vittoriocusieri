<?php get_header(); ?>
<div class="home">
    <div class="home__container-carousel">
        <div id="home-carousel-slide-one" class="home__carousel-slide">
            <div class="home__slide-wrapper home__slide-one-wrapper" style="--home-background-one: url('https://vittoriocusieri.it/wp-content/uploads/2024/04/albero-di-natale.webp')">
                <div class="home__container-slide-title">
                    <h2 class="home__slide-title h1">Prodotti artigianali fatti interamente a mano</h2>
                </div>
                <div class="home__container-slide-button">
                    <a class="button__red" href="<?= get_site_url(); ?>/statue/">Scopri il negozio</a>
                </div>
            </div>
        </div>
        <div id="home-carousel-slide-two" class="home__carousel-slide home__carousel-slide--no-active">
            <div class="home__slide-wrapper home__slide-two-wrapper" style="--home-background-two: url('https://vittoriocusieri.it/wp-content/uploads/2024/04/albero-di-natale-con-le-luci.webp')">
                <div class="home__container-slide-title">
                    <h2 class="home__slide-title h1">Idee regalo con oggetti fatti a mano e creazioni artigianali</h2>
                </div>
                <div class="home__container-slide-button">
                    <a class="button__red" href="<?= get_site_url(); ?>/statue/">Scopri la magia</a>
                </div>
            </div>
        </div>
        <div id="home-carousel-slide-three" class="home__carousel-slide home__carousel-slide--no-active">
            <div class="home__slide-wrapper home__slide-three-wrapper" style="--home-background-three: url('https://vittoriocusieri.it/wp-content/uploads/2024/04/candela-di-natale.webp')">
                <div class="home__container-slide-title">
                    <h2 class="home__slide-title h1">Artigianato artistico con statue e pezzi unici</h2>
                </div>
                <div class="home__container-slide-button">
                    <a class="button__red" href="<?= get_site_url(); ?>/statue/">Lasciati incantare</a>
                </div>
            </div>
        </div>
    </div>
    <div class="home__container-about">
        <h2 class="h2">Chi è Vittorio Cusieri</h2>
        <p class="p__l">
        Nelle righe seguenti racconterò come sono nate le mie passioni per gli argomenti trattati su questo sito.<br/>
        La mia prima passione è stata certamente il presepe.<br/>
        Da che né ho memoria, a Natale, ho sempre giocato con i personaggi del presepe.<br/>
        A me sembrava strano che, dovendo portare doni a Gesù, stessero fermi.<br/>
        <a class="link__red" href="<?= get_site_url(); ?>/chi-sono">Continua a leggere</a>
        </p>
    </div>
    <div class="home__container-negozio">
        <h2 class="h2">Il Negozio di Vittorio Cusieri</h2>
        <h4 class="h4">Scopri gli ulitmi lavori</h4>
        <div class="home__container-button">
            <a class="button__red" href="<?= get_site_url(); ?>/statue/">Visita il negozio</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>