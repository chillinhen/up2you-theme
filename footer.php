<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="footer-widgets">
        <div class="wrapper">
            <div class="footer-widget">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-1'))  ?>
            </div>
            <div class="footer-widget">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-2'))  ?>
            </div>
            <div class="footer-widget">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-3'))  ?>
            </div>
            <div class="footer-widget">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-4'))  ?>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="footer-bottom-line">
        <div class="wrapper">
            <div class="menu-footerlinks-container">
                <?php wp_nav_menu(array('theme_location' => 'footer-links', 'menu_class' => 'footer-menu', 'container' => '', 'fallback_cb' => '')); ?>
            </div>
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> copyright <?php bloginfo('name'); ?>. 
                <?php printf(__('%1$s designed by %2$s.', 'up2you-theme'), 'Childtheme from <a href="//html5blank.com">HTML5 Blank</a> - ', '<a href="http://www.chilliscope.de" alt="Freelance Webdesigner Claudia Hillen">chilliscope</a> & <a href="http://www.woothemes.com" alt="Premium WordPress Themes & Plugins by WooThemes" title="Premium WordPress Themes & Plugins by WooThemes" rel="designer">WooThemes</a>'); ?>
            </div>
        </div>
    </div>
    <!-- /copyright -->
    
</footer>
<!-- /footer -->
</div>
<!-- /wrapper -->
<?php get_template_part('partials/modal', 'box'); ?>

<?php wp_footer(); ?>


</body>
</html>
