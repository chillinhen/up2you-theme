<?php get_header(); ?>

<main role="main">
    <!-- section -->

    <section class="wrapper site-main">
        <div class="content">
            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h1><?php esc_html_e('Page not found', 'up2you-theme'); ?></h1>
                <p>
                    <?php _e('It looks like nothing was found at this location. Please return to our homepage or try a search.', 'up2you-theme'); ?>
                </p>

            </article>
        </div>
        <aside class="sidebar">
            <?php get_template_part('searchform'); ?>
            <a href="<?php echo home_url(); ?>"><?php _e('Or return home?', 'up2you-theme'); ?></a>
        </aside>   
    </section>
    <!-- /section -->
</main>
<?php get_footer(); ?>
