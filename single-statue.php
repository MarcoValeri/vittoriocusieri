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
    <div class="statua__container-sell">
        <h3 class="h3">Acquista ora</h3>
        <div class="statua__container-sell-buttons">
            <a class="button__red" href="mailto:vittorio-g@hotmail.it ">Acquista tramite email</a>
        </div>
    </div>
    <div class="statua__container-shop">
        <a class="button__red" href="<?= get_site_url(); ?>">Torna al Negozio</a>
    </div>
</div>
<?php get_footer(); ?>