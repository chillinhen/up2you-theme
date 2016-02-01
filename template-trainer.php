<?php
/**
 * The template for displaying the homepage.
 * Template name: Trainer
 */
get_header();
?>

<main role="main">
    <hgroup class="full-size-bar" id="message-01">
        <h1><?php the_title(); ?></h1>
        <h2><?php
            if (get_field('subheadline')) : echo the_field('subheadline');
            endif;
            ?>
        </h2>
    </hgroup>
    <section class="site-main wrapper">
        <div class="column-cards">
            <!-- Thumbnails -->
            <?php
            $filter = array(
                'post_type' => 'trainer',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $trainer = new WP_Query($filter);
            ?>
            <?php
            if ($trainer->have_posts()): while ($trainer->have_posts()) : $trainer->the_post();
                    ?>
                    <?php get_template_part('partials/article-trainer'); ?>
                    <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
            </div>
    </section>
    <?php get_template_part('partials/message', 'second'); ?>
    <!-- section -->
    <section class="content">
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
</main>

<?php get_footer(); ?>
