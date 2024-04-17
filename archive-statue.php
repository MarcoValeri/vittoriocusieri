<h1>archive-statue.php</h1>
<div class="statues">
    <div class="statues__container-products">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $postUrl = get_permalink();
                $postTitle = get_the_title();
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
                            <h2 class="h2"><?= $postTitle; ?></h2>
                        </div>
                        <div class="statua-card__container-description">
                            <p class="p__xl"><?= $postExcerptNoHTML; ?>...</p>
                        </div>
                        <!-- <div class="statua-card__container-quantity">
                            <p class="p__l">Pezzi disponibili: {{ quantity }}</p>
                        </div>
                        <div class="statua-card__container-price">
                            <ul class="statua-card__menu-price">
                                <li><p class="p">Prezzo: €{{ price }}</p></li>
                                <li><p class="p">Spedizione: €{{ shipping }}</p></li>
                                <li><p class="p">Totale: €{{ price + shipping }}</p></li>
                            </ul>
                        </div> -->
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