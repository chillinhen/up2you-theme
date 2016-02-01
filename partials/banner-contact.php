<?php
$anfahrt = get_field('anfahrt');
$contact = get_field('kontaktdaten');
$claim = get_field('claim');
if ($anfahrt || $contact) :
    ?>
    <div class="full-size-bar" id="contact">
        <div class="col-left">
            <?php
            if ($anfahrt):
                // override $post
                $post = $anfahrt;
                setup_postdata($post);
                the_content();
                wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
            endif;
            ?>
        </div>
        <div class="col-right contact-data">
            <?php
            if ($contact):
                // override $post
                $post = $contact;
                setup_postdata($post);
                if ($claim):
                    echo '<h1>' .$claim .'</h1>';
                    endif;
                the_content();
                wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
            endif;
            ?>
        </div>

    </div>
<?php endif; ?>
