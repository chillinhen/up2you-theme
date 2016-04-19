<nav id="offNav" class="responsiveMenu">
    <?php wp_nav_menu(array('theme_location' => 'meta-links', 'menu_class' => 'meta-menu', 'container' => '', 'fallback_cb' => '')); ?>
    <hr>
    <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
                            </a>
     <?php html5blank_nav(); ?>
    
        
</nav>