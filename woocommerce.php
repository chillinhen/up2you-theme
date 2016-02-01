<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="wrapper site-main">
        <?php if (!(is_front_page())) : ?>
            <?php get_sidebar('shop'); ?>
        <?php endif; ?>
        <div class="content">

            <?php woocommerce_content(); ?>


        </div>
        <!-- /section -->
        
    </section>
</main>



<?php get_footer(); ?>
