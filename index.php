<?php get_header(); ?>
<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $pageTitle = get_the_title();
            $pageContent = get_the_content();
            ?>
            <div>
                <div>
                    <?= $pageTitle; ?>
                </div>
                <div>
                    <?= $pageContent; ?>
                </div>
            </div>
            <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>