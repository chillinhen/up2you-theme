<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <main role="main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
            <header class="full-size-bar" id="message">
                <h1><?php the_title(); ?></h1>
                <h2><?php
                    if (get_field('subheadline')) : echo the_field('subheadline');
                    endif;
                    ?></h2>
            </header>
            <section class="wrapper site-main">

                    <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <aside class="sidebar">
                        <a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </aside>
                    <?php endif; ?>
                <section class="post_content">
                            <?php the_content(); ?>
                    <!-- tables -->
					<?php get_template_part('partials/table','price');?>
					<?php get_template_part('partials/table','dates');?>
					
					<!-- Lists -->
                    <?php if (get_field('checklist')) : ?>
                        <div class="check-list">
                            <?php the_field('checklist'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('motivationlist')) : ?>
                        <div class="motivation-list">
                            <?php the_field('motivationlist'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('shoppinglist')) : ?>
                        <div class="shopping-list">
                            <?php the_field('shoppinglist'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('link') & get_field('linktext')) : ?>
                        <div class="cta-link">   <a class="btn button" href="<?php the_field('link') ?>"><?php the_field('linktext') ?></a></div>
                    <?php endif; ?>
                    
				 </section>
            </section>
  </article>
        <?php endwhile; // end of the loop.    ?>
    </main>
<?php else: ?>
    <main role="main">
        <!-- section -->

        <section class="wrapper site-main">
            <div class="content">
                <!-- article -->
                <article>

                    <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

                </article>
                <!-- /article -->
            </div>
        </section>
        <!-- /section -->
    </main>
<?php endif; ?>


<?php get_footer(); ?>