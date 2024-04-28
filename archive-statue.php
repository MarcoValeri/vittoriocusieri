<?php get_header(); ?>
<div class="statues">
    <div class="statues__container-products">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $postUrl = get_permalink();
                $postTitle = get_the_title();
                $postTitleExcerpt = substr($postTitle, 0, 25);
                $postImageUrl = get_the_post_thumbnail_url();
                $postImageAlt = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);
                $postContent = get_the_content();
                $postExcerpt = substr($postContent, 0, 200);
                $postExcerptNoHTML = strip_tags($postExcerpt);
                ?>
                <div class="statua-card">
                    <div class="statua-card__wrapper">
                        <div class="statua-card__container-image">
                            <img class="statua-card__image" src="<?= $postImageUrl; ?>" alt="<?= $postImageAlt; ?>" />
                        </div>
                        <div class="statua-card__container-title">
                            <h2 class="h2"><?= strlen($postTitleExcerpt) > 40 ? $postTitleExcerpt . "..." : $postTitleExcerpt; ?></h2>
                        </div>
                        <div class="statua-card__container-description">
                            <p class="p__xl"><?= $postExcerptNoHTML; ?>...</p>
                        </div>
                        <div class="statua-card__container-btn">
                            <a class="button__red" href="<?= $postUrl; ?>">Scopri di più</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>