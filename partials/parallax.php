<?php
$frage = get_field("frage");
$url = get_field("hintergrundbild");
$post = get_field("post");
?>
<?php if ($url) : ?>
    <section class="parallax" style="background-image: url('<?php echo ($url) ? $url : ''; ?>');">
        <div class="wrapper" id="cta-anchor">
            <?php if ($frage) : ?>
                <h2 class="question"><?php echo $frage; ?></h2>
            <?php endif; ?>
            <?php
            if ($post) :
                setup_postdata($post);
                get_template_part('partials/article','page');
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>
<?php endif; ?>
