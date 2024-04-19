<?php get_header(); ?>
<div class="error-404">
    <div class="error-404__container-title">
        <h2 class="h2">Pagina non trovata</h2>
    </div>
    <div class="error-404__container-buttons">
        <a class="button__red" href="<?= get_site_url(); ?>/">Home</a>
        <a class="button__red" href="<?= get_site_url(); ?>/statue/">Negozio</a>
        <a class="button__red" href="<?= get_site_url(); ?>/chi-sono">Blog</a>
        <a class="button__red" href="<?= get_site_url(); ?>/contatti">Contatti</a>
    </div>
</div>
<?php get_footer(); ?>