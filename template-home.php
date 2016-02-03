<?php
/**
 * The template for displaying the homepage.
 * Template name: Homepage
 */
get_header();
?>
<main role="main">
    <?php get_template_part('partials/message', 'first'); ?>
        <section class="panels">
        <div class="wrapper">
            <!-- Thumbnails -->
            <?php
            $argsMain = array(
                'post_type' => 'programme',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            ?>
            <?php
            $firstQuery = new WP_Query($argsMain);
            if ($firstQuery->have_posts()): while ($firstQuery->have_posts()) : $firstQuery->the_post();
                    ?>
                    <?php get_template_part('partials/panels'); ?>
                    <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </section>
    <?php get_template_part('partials/message', 'second'); ?>
        <!-- section -->
    <section id="page-cnt" class="site-main">
        <div class="content">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php get_template_part('partials/article-page-no-headline'); ?>
                <?php endwhile;?>

            <?php else: ?>
                <?php get_template_part('partials/article', '404'); ?>

            <?php endif; ?>
        </div>
    </section>
    <!-- /section -->
    <?php get_template_part('partials/parallax'); ?>
</main>
<?php get_footer(); ?>