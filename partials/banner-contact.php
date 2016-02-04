<?php
$map = get_field('map');
if ($map) :
    ?>
    <div id="banner">
        <?php 
        $post = $map;
        setup_postdata($post);
        the_content();
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly?>

    </div>
<?php endif; ?>