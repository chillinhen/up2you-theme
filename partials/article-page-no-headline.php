<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

        <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </a>
        </div>
    <?php endif; ?>
    <!-- /post thumbnail -->
    
    <section class="post_content">
        <?php the_content(); ?>   
    </section>
    <footer>
            <!-- post details -->
            <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
            <span class="author"><?php _e('Published by', 'html5blank'); ?> <?php the_author_posts_link(); ?></span>
            <span class="comments"><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'html5blank'), __('1 Comment', 'html5blank'), __('% Comments', 'html5blank')); ?></span>
            <!-- /post details -->

            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

            <?php edit_post_link(); ?>
            </footer>

</article>
<!-- /article -->