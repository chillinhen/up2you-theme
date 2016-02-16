<?php
/**
 * The template for displaying the homepage.
 * Template name: Erfolgsstories
 */
get_header();
?>

<main role="main">
    <!-- section -->
    <div class="full-size-bar" id="message-02">
        <div class="col-full"><h1><?php _e('Erfolgstories', 'up2you-theme'); ?></h1></div>
    </div>
    <section class="wrapper site-main">
        <div class="content">
            <?php
            $filter = array(
                'post_type' => 'erfolgsstories',
                'post_status' => 'publish',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $article = new WP_Query($filter);
            ?>



            <?php
            if ($article->have_posts()) :
                while ($article->have_posts()) : $article->the_post();
                    get_template_part('partials/article');

                endwhile;
                wp_reset_query();
                ?>
            <?php else : ?>
                <?php get_template_part('partials/article', '404'); ?>

            <?php endif; ?>

        <?php get_template_part('pagination'); ?>
        </div>
    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
