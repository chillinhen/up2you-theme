<article id="thumb-<?php the_ID(); ?>" <?php post_class('panel'); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
    <div>
        <header>
            <?php if (has_post_thumbnail()) : ?>
               <div class="thumbnail">
                   
                         <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('panel-size'); ?></a>
                </div>
            <?php endif;
            ?>
            <h3 class="headline">
                <a href="<?php the_permalink(); ?>">
                   <?php the_title() ?>
                </a>
            </h3>
        </header>
        <section class="post_content">

            <?php
            $excerpt = get_field("auszug");
            if ($excerpt) :
                ?>
                <div class="excerpt"><?php echo $excerpt; ?></div>
            <?php endif; ?>

        </section>
    </div>
</article>