<?php get_header(); ?>

<main role="main">
    <!-- section -->

    <section class="wrapper site-main">
        <div class="content">
            <h1><?php echo sprintf(__('%s Search Results for ', 'html5blank'), $wp_query->found_posts);
echo get_search_query();
?></h1>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php get_template_part('partials/article', 'blog'); ?>
                <?php endwhile; ?>

                <?php get_template_part('pagination'); ?>
<?php endif; ?>



        </div>
        <?php if (!(is_front_page())) : ?>
            <?php get_sidebar(); ?>
<?php endif; ?>
    </section>
    <!-- /section -->
</main>
<?php get_footer(); ?>
