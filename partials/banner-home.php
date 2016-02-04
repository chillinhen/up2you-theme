<!-- config Banner -->
<?php
$claim = get_field('claim');
$list = get_field('liste');
$button01 = get_field('button-01');
//$button02 = get_field('button-02');
$hero = get_field("hero-shot-image");
?>
<?php if ($hero) : ?>
    <div id="banner" role="banner" style="background-image: url('<?php echo ($hero) ? $hero : ''; ?>');">
        <div class="wrapper">
            <?php if ($claim) : ?>
                <h1 class="claim"><?php echo $claim; ?></h1>
                <?php if ($list) : ?>
                    <div class="claim-list">
                        <?php echo $list; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>