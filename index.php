<?php get_header(); ?>

<main role="main">
    <!-- section -->

    <section class="wrapper site-main">
        <div class="content">

            <h1><?php _e('Latest Posts', 'html5blank'); ?></h1>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>
        </div>
        <?php if (!(is_front_page())) : ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>
    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
