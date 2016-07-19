//Erfolgstory_02
add_action('init', 'my_custom_post_stories');
function my_custom_post_stories() {
    $labels = array(
        "name" => "Stories",
        "singular_name" => "Story",
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
        "rewrite" => array("slug" => "stories", "with_front" => true),
        "query_var" => true,
        "supports" => array('title', 'editor', 'thumbnail', 'excerpt'), 
        "taxonomies" => array('category', 'post_tag'));
    register_post_type("stories", $args);
}