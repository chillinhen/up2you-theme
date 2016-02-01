

<main role="main">
    <?php get_template_part('partials/banner', 'contact'); ?>
     <!-- section -->
    <section class="site-main wrapper">
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
