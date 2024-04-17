<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();

        $postID = get_the_ID();
        $postTitle = get_the_title();
        $postDate = get_the_date('d-m-Y');
        $postUpdateDate = get_the_modified_date('d-m-Y');
        $postCommentsNum = get_comments_number();
        $postContent = get_the_content();
    }
}
?>
<div class="statua">
    <div class="statua__container-title">
        <h1 class="h1"><?= $postTitle; ?></h1>
    </div>
    <div class="statua__container-description">
        <?= $postContent; ?>
    </div>
        <!-- <div class="statua__container-materials">
            <h3 class="h3">Materiali utilizzati</h3>
            {{ statuaMateriali|raw }}
        </div>
        <div class="statua__container-price">
            <h3 class="h3">Prezzo e disponiilità</h3>
            <p class="p__xl">Disponibili: {{ statuaQuantita}}</p>
            <p class="p__xl">Prezzo: €{{statuaPrezzo }}</p>
            <p class="p__xl">Spedizione: €{{ statuaSpedizione }}</p>
            <p class="p__xl"><strong>Totale: €{{ statuaPrezzo + statuaSpedizione }}</strong></p>
        </div> -->
    <div class="statua__container-sell">
        <h3 class="h3">Acquista ora</h3>
        <div class="statua__container-sell-buttons">
            <a class="button__red" href="mailto:vittorio-g@hotmail.it ">Acquista tramite email</a>
        </div>
        <!-- <div class="statua__container-sell-buttons">
            <a class="button__red" href="tel:+393425181330">Contatta Vittorio Cusieri</a>
        </div> -->
    </div>
    <!-- <div class="statua__container-images">
        {% for image in statuaImages %}
            <div class="statua__container-image">
                <img class="statua__image" src="../images/{{ image }}" alt="" />
            </div>
        {% endfor %}
    </div> -->
    <div class="statua__container-shop">
        <a class="button__red" href="{{ path('app_statue', {pageNumber: '0'}) }}">Torna al Negozio</a>
    </div>
</div>
<?php get_footer(); ?>