<article id="trainer-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">
    <header>  
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </header>
    <hgroup>
        <h1><?php the_title(); ?></h1>
        <h2><?php
            if (get_field('subheadline')) : echo the_field('subheadline');
            endif;
            ?>
        </h2>
        <a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php _e('mehr Infos', 'up2you-theme') ?></a>
    </hgroup>
</article>