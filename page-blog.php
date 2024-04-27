<?php get_header(); ?>
<div class="blog">
    <div class="blog__container-title">
        <h1 class="blog__title">Ultimi articoli</h1>
    </div>
    <div class="blog__container-articles">
    <?php
    $argsPost = [
        "post_type"         => "post",
        "posts_per_page"    => 10,
        "order"             => "DESC",
        "post_status"       => "publish"
    ];

    $lastPostQuery = new WP_Query($argsPost);
    
    if ($lastPostQuery->have_posts()) {
        while ($lastPostQuery->have_posts()) {
            $lastPostQuery->the_post();

            $lastPostLink = get_permalink();
            $lastPostImageUrl = get_the_post_thumbnail_url();
            $lastPostImageAlt = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);
            $lastPostTitle = get_the_title();
            $lastPostContent = get_the_content();
            $lastPostExcerp = substr($lastPostContent, 0, 200);
            $lastPostExcerpNoHTML = strip_tags($lastPostExcerp);
            ?>
            <a class="blog-card link-no-style" href="<?= $lastPostLink; ?>">
                <div class="blog-card__container">
                    <div class="blog-card__container-image">
                        <img class="blog-card__image" src="<?= $lastPostImageUrl; ?>" alt="<?= $lastPostImageAlt; ?>">
                    </div>
                    <div class="blog-card__container-content">
                        <h1 class="blog-card__content-title"><?= $lastPostTitle; ?></h1>
                        <div class="blog-card__content-paragraph"><?= $lastPostExcerpNoHTML; ?></div>
                    </div>
                </div>
            </a>
            <?php
        }
        wp_reset_postdata();
    }
    ?>
    </div>
</div>
<?php get_footer(); ?>