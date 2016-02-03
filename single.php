<?php get_header(); ?>

<main role="main">
    <!-- section -->

    <section class="wrapper site-main">
        <div class="content">

            <?php
            if (have_posts()): while (have_posts()) : the_post();

                    get_template_part('partials/article', 'page');

                endwhile;
                ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

                </article>
                <!-- /article -->

            <?php endif; ?>
        </div>
        <?php #if (!(is_front_page())) : ?>
            <?php #get_sidebar(); ?>
        <?php #endif; ?>
    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>
