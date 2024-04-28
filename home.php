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
    <div class="home__container">
        <h2 class="h2">Chi è Vittorio Cusieri</h2>
        <p class="p__l">
        Nelle righe seguenti racconterò come sono nate le mie passioni per gli argomenti trattati su questo sito.<br/>
        La mia prima passione è stata certamente il presepe.<br/>
        Da che né ho memoria, a Natale, ho sempre giocato con i personaggi del presepe.<br/>
        A me sembrava strano che, dovendo portare doni a Gesù, stessero fermi.<br/>
        <a class="link__red" href="<?= get_site_url(); ?>/chi-sono">Continua a leggere</a>
        </p>
    </div>
    <div class="home__container">
        <h2 class="h2">Il Negozio di Vittorio Cusieri</h2>
        <h4 class="h4">Scopri gli ulitmi lavori</h4>

        <div class="home__container-negozio">
        <?php
        $argsStatue = [
            "post_type"         => "statue",
            "posts_per_page"    => 5,
            "order"             => "DESC",
            "post_status"       => "publish"
        ];

        $lastStatueQuery = new WP_Query($argsStatue);
        
        if ($lastStatueQuery->have_posts()) {
            while ($lastStatueQuery->have_posts()) {
                $lastStatueQuery->the_post();

                $lastStatuaLink = get_permalink();
                $lastStatuaImageUrl = get_the_post_thumbnail_url();
                $lastStatuaImageAlt = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);
                $lastStatuaTitle = get_the_title();
                $lastStatuaTitleExcerpt = substr($lastStatuaTitle, 0, 25);
                $lastStatuaContent = get_the_content();
                $lastStatuaExcerp = substr($lastStatuaContent, 0, 200);
                $lastStatuaExcerpNoHTML = strip_tags($lastStatuaExcerp);
                ?>
                <div class="statua-card">
                    <div class="statua-card__wrapper">
                        <div class="statua-card__container-image">
                            <img class="statua-card__image" src="<?= $lastStatuaImageUrl; ?>" alt="<?= $lastStatuaImageAlt; ?>" />
                        </div>
                        <div class="statua-card__container-title">
                            <h2 class="h2"><?= strlen($lastStatuaTitleExcerpt) > 40 ? $lastStatuaTitleExcerpt . "..." : $lastStatuaTitleExcerpt; ?></h2>
                        </div>
                        <div class="statua-card__container-description">
                            <p class="p__xl"><?= $lastStatuaExcerpNoHTML; ?>...</p>
                        </div>
                        <div class="statua-card__container-btn">
                            <a class="button__red" href="<?= $lastStatuaLink; ?>">Scopri di più</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
        }
        ?>
        </div>
        <div class="home__container-button">
            <a class="button__red" href="<?= get_site_url(); ?>/statue/">Visita il negozio</a>
        </div>
    </div>
    <div class="home__container">
        <h2 class="h2">Ultimi articoli</h2>
        <div class="home__container-blog">
        <?php
        $argsPost = [
            "post_type"         => "post",
            "posts_per_page"    => 5,
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
        <div class="home__container-button">
            <a class="button__red" href="<?= get_site_url(); ?>/blog/">Scopri tutti gli articoli</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>