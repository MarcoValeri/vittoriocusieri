<?php get_header(); ?>
<h1>page.php</h1>
<div class="page">
    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $postID = get_the_ID();
            $postTitle = get_the_title();
            $postContent = get_the_content();
    ?>
    <?php
        }
    }
    ?>
    <h2 class="page__title h2"><?= $postTitle; ?></h2>
    <div class="page__p p__l">
        <?= $postContent; ?>
    </div>
</div>
<?php get_footer(); ?>