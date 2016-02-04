<?php
$frage = get_field("frage");
$url = get_field("hintergrundbild");
$post = get_field("post");
?>
<?php if ($url) : ?>
    <div class="parallax" id="contact" style="background-image: url('<?php echo ($url) ? $url : ''; ?>');">
        <div class="wrapper">
            <?php if ($frage) : ?>
                <h2 class="question"><?php echo $frage; ?></h2>
            <?php endif; ?>
            <?php
            if ($post) : ?>
                <div class="post_content"><?php echo $post; ?></div>
            <?php endif;
            ?>
        </div>
    </div>
<?php endif; ?>
