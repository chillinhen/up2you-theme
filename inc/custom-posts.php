<?php

//Erfolgstory
add_action('init', 'my_custom_post_story');
function my_custom_post_story() {
    $labels = array(
        "name" => "Erfolgstories",
        "singular_name" => "Erfolgstoriy",
    );

    $args = array(
        "labels" => $labels,
        "description" => "Hier kommen alle Erfolgstories hin",
        "public" => true,
        'menu_position' => 5,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "erfolgsstories", "with_front" => true),
        "query_var" => true,
        "supports" => array('title', 'editor', 'thumbnail', 'excerpt'), 
        "taxonomies" => array('category', 'post_tag'));
    register_post_type("erfolgsstories", $args);
}
//Programme
add_action('init', 'my_custom_post_program');
function my_custom_post_program() {
    $labels = array(
        "name" => "Programme",
        "singular_name" => "Programm",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle alle Ernährungsprogramme",
        "public" => true,
        'menu_position' => 5,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "programme", "with_front" => true),
        "query_var" => true,
        "supports" => array('title', 'editor', 'thumbnail', 'excerpt','custom_fields'), 
        "taxonomies" => array('category', 'post_tag'));
    register_post_type("programme", $args);
}
//Trainer
add_action('init', 'my_custom_post_trainer');
function my_custom_post_trainer() {
    $labels = array(
        "name" => "Trainer",
        "singular_name" => "Trainer",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Trainer",
        "public" => true,
        'menu_position' => 5,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "trainer", "with_front" => true),
        "query_var" => true,
        "supports" => array('title', 'editor', 'thumbnail', 'excerpt','custom_fields'), 
        "taxonomies" => array('category', 'post_tag'));
    register_post_type("trainer", $args);
}
?>