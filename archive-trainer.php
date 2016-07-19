<?php get_header(); ?>

<main role="main">
    <?php get_template_part('partials/message', 'first'); ?>
    <section class="site-main wrapper">
        <div class="content">

			

			<?php get_template_part('partials/article','trainer'); ?>

			<?php get_template_part('pagination'); ?>
        </div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
