<?php
// init custom posts
require_once 'inc/custom-posts.php';
//require_once('inc/customizer.php');

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'up2u_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'up2u_theme_wrapper_end', 10);

function up2you_theme_wrapper_start() {
    echo '<div id="page">';
}

function up2you_theme_wrapper_end() {
    echo '</div>';
}

add_action('after_setup_theme', 'woocommerce_support');

function woocommerce_support() {
    add_theme_support('woocommerce');
}



add_action('after_setup_theme', 'up2u_theme_setup');

function up2u_theme_setup() {

    // Adding Translation Option
    load_theme_textdomain('up2you-theme', get_stylesheet_directory_uri() . '/languages');
    
    //init image styles
    add_image_size('panel-size', 900, 900, true);
    add_image_size('gallery', 400, 400, true);

    // init styles
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    if (!function_exists("theme_enqueue_styles")) {
        if (!is_admin()) {

            function theme_enqueue_styles() {
                wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
                wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/screen.min.css', array('parent-style')
                );
                wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic|Merriweather+Sans:400,700,700italic,300,300italic,400italic|Lobster+Two', 'style', '1.0', 'all', array('child-style'));
                wp_enqueue_style('fontawseome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', '4.4.0', 'all', array('child-style'));
                 wp_enqueue_style('print', get_stylesheet_directory_uri() . '/css/print.min.css', 'style', '1.0', 'print', array('child-style'));
            }

        }
    }

    //init scripts
    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
    if (!function_exists("theme_enqueue_scripts")) {
        if (!is_admin()) {

            function theme_enqueue_scripts() {
                wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', '2.8.3', true);
                wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.2', true);
            }

        }
    }

    //Post Thumbnail Hooks
//Post Thumbnail Hooks
    function the_post_thumbnail_caption() {
        global $post;

        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

        if ($thumbnail_image && isset($thumbnail_image[0])) {
            echo '<span class="thumbnail-caption-text">' . $thumbnail_image[0]->post_excerpt . '</span>';
        }
    }

//add menu
    add_action('init', 'register_my_menu');

    function register_my_menu() {
        unregister_nav_menu('sidebar-menu');
        unregister_nav_menu('extra-menu');
        register_nav_menu('meta-links', __('Meta Menu'));
        register_nav_menu('footer-links', __('Footer Links'));
        register_nav_menu('seo-links', __('SEO Links'));
    }
    //remove current sidebars
    function remove_sidebars() {
        unregister_sidebar('widget-area-1');
        unregister_sidebar('widget-area-2');
    }

    add_action('init', 'remove_sidebars');
//add Widgets bars
    // If Dynamic Sidebar Exists
    if (function_exists('register_sidebar')) {
        //external sidebar
        register_sidebar(array(
            'name' => __('Allgemeine Sidebar', 'up2you-theme'),
            'description' => __('Hier die allgemeine Sidebar...', 'up2you-theme'),
            'id' => 'sidebar-extern',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        //internal sidebar
        register_sidebar(array(
            'name' => __('Interne Sidebar', 'up2you-theme'),
            'description' => __('Hier die interne Sidebar,mur für Mitglieder sichtbar', 'up2you-theme'),
            'id' => 'sidebar-intern',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Shop Sidebar
        register_sidebar(array(
            'name' => __('Shop Sidebar', 'up2you-theme'),
            'description' => __('Hier WooCoomerce Widgets...', 'up2you-theme'),
            'id' => 'shop-sidebar',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));

        // Define Footer Widgets column 01
        register_sidebar(array(
            'name' => __('Footer 01', 'up2you-theme'),
            'description' => __('Hier die Footer Widgets Spalte 01...', 'up2you-theme'),
            'id' => 'footer-widgets-1',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Footer Widgets column 02
        register_sidebar(array(
            'name' => __('Footer 02', 'up2you-theme'),
            'description' => __('Hier die Footer Widgets Spalte 02...', 'up2you-theme'),
            'id' => 'footer-widgets-2',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Footer Widgets column 03
        register_sidebar(array(
            'name' => __('Footer 03', 'up2you-theme'),
            'description' => __('Hier die Footer Widgets Spalte 03...', 'up2you-theme'),
            'id' => 'footer-widgets-3',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Footer Widgets column 04
        register_sidebar(array(
            'name' => __('Footer 04', 'up2you-theme'),
            'description' => __('Hier die Footer Widgets Spalte 04...', 'up2you-theme'),
            'id' => 'footer-widgets-4',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    remove_filter('show_admin_bar', 'remove_admin_bar');
    remove_action('init', 'create_post_type_html5');
}

?>