<article id="thumb-<?php the_ID(); ?>" <?php post_class('panel'); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
    <header>
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail">
                <?php the_post_thumbnail();?>
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
            <a href="<?php the_permalink(); ?>">
<?php the_title() ?>
            </a>
        </h3>
    </header>
    <section>

        <?php
        $excerpt = get_field("auszug");
        if ($excerpt) :
            ?>
            <div class="excerpt"><?php echo $excerpt; ?></div>
<?php endif; ?>

    </section>
</article>