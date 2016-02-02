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
    <?php #get_template_part('partials/message', 'second'); ?>
    <!-- section -->
    <section class="content" id="story">
        <div class="wrapper">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php get_template_part('partials/article', 'page'); ?>
                <?php endwhile; ?>

            <?php else: ?>
                <?php get_template_part('partials/article', '404'); ?>

            <?php endif; ?>
        </div>
    </section>
    <!-- /section -->
    <!-- section -->
        <?php get_template_part('partials/parallax'); ?>
    <!-- /section -->
</main>
<?php if (!(is_front_page())) : ?>
    <?php get_sidebar(); ?>
<?php endif; ?>

<?php get_footer(); ?>
