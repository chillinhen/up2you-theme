<?php
/**
 * Template name: Kontakt
 */
get_header();
?>
<main role="main">

    <section class="content">
        <div class="site-main wrapper">
            <div class="content">
                <h1><?php the_title(); ?></h1>

                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                        <!-- article -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php the_content(); ?>

                            

                        </article>
                        <!-- /article -->
<br class="clear">

                            <?php edit_post_link(); ?>
                    <?php endwhile; ?>

                <?php else: ?>
                    <?php get_template_part('partials/article', '404'); ?>

                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>