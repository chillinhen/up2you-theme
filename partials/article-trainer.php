<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <main>
        <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
            <aside>
                <a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php
                    the_post_thumbnail();
                    the_post_thumbnail_caption(); // Fullsize image for the single post  
                    ?>
                </a>
            </aside>
            <section class="post_content">
                <h2 class="page_title"><?php the_title(); ?></h2>
                <?php the_content(); ?>   
    <?php if (current_user_can('edit_posts')) : ?>
                    <footer>
                        <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                        <span class="author"><?php _e('Published by', 'html5blank'); ?> <?php the_author_posts_link(); ?></span>
                        <!-- /post details -->

                        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php   ?>

                    <?php edit_post_link(); ?>
                    </footer>
            <?php endif; ?>
            </section>
<?php endif; ?>
    </main>
</article>