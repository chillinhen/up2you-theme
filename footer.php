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
            </div>
        </div>
    </div>
    <!-- /copyright -->
    <div class="scroll-to-top"><i class="fa fa-angle-up fa-large"></i></div><!-- .scroll-to-top -->
</footer>
<!-- /footer -->
</div>
<!-- /wrapper -->
<?php get_template_part('partials/modal', 'box'); ?>
<?php get_template_part('partials/nav', 'off'); ?>

<?php wp_footer(); ?>


</body>
</html>
