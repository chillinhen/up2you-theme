<?php get_header(); ?>

<main role="main">
    <hgroup class="full-size-bar" id="message-01">
        <h1><?php the_title(); ?></h1>
        <h2><?php
            if (get_field('subheadline')) : echo the_field('subheadline');
            endif;
            ?></h2>
    </hgroup>
    <!-- section -->

    <section class="wrapper site-main">
        <div class="content">
            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php the_content(); ?>

                        <br class="clear">

                        <?php edit_post_link(); ?>

                    </article>
                    <!-- /article -->

                <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

                </article>
                <!-- /article -->

            <?php endif; ?>
        </div>
        <?php if (!(is_front_page())) : ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>
    </section>
    <!-- /section -->
</main>
<?php get_footer(); ?>
