<?php
/**
 * Template Name: Trainer
 */
get_header();
?>

<main role="main">
    <?php get_template_part('partials/message', 'first'); ?>
    <section class="site-main wrapper">
        <div class="content">
            <!-- Thumbnails -->
            <?php
            $filter = array(
                'post_type' => 'trainer',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'DESC'
            );
            $trainer = new WP_Query($filter);
            ?>
            <?php
            if ($trainer->have_posts()): while ($trainer->have_posts()) : $trainer->the_post();
                    get_template_part('partials/article','trainer');
                endwhile;
            endif;
            wp_reset_query();
            ?>
            <hr>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php get_template_part('partials/article'); ?>
                <?php endwhile; ?>

            <?php else: ?>
                <?php get_template_part('partials/article', '404'); ?>

<?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
