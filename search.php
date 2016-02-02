<?php get_header(); ?>

<main role="main">
    <!-- section -->

    <section class="wrapper site-main">
        <div class="content">
            <h1><?php echo sprintf(__('%s Search Results for ', 'html5blank'), $wp_query->found_posts);
            echo get_search_query(); ?></h1>

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