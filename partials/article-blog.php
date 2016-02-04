<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(array(120, 120)); // Declare pixel size you need inside the array ?>
                </a>
            <?php endif; ?>
    <section class="post_content">
        <div>
        <h2 class="post_title"><?php the_title(); ?></h2>
         <?php html5wp_excerpt('html5wp_index');?>
        </div>
    </section>


    <?php comments_template('', true); // Remove if you don't want comments ?>

    <br class="clear">

    <?php edit_post_link(); ?>

</article>
<!-- /article -->