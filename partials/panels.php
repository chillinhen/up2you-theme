<article id="thumb-<?php the_ID(); ?>" <?php post_class('panel'); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
    <div>
        <header>
            <?php if (has_post_thumbnail()) : ?>
                <div class="thumbnail">
                    <?php the_post_thumbnail(); ?>
                    <?php if (get_field('preis')) : ?>
                        <div class="overlay">
                            <div class="badge">
                                <p> <?php the_field('preis'); ?></p>
                            </div>
                        </div>

                    <?php endif; ?>
                </div>
            <?php endif;
            ?>
            <h3 class="headline">
                <?php the_title() ?>
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