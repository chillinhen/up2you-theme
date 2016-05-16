<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <main role="main">
            <!-- section -->
            <header class="full-size-bar" id="message-02">
                <h1><?php the_title(); ?></h1>             
            </header>
            <section class="wrapper site-main">
                <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <aside class="sidebar">
                        <a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </aside>
                <?php endif; ?>
                <div class="post_content">
                    <?php if (has_post_thumbnail()) : ?>
                        <h2>" <?php the_post_thumbnail_caption(); ?> "</h2>
                    <?php endif; ?>
                    <?php the_content(); ?>   


                    <?php
                    $phasen = array();
                    for ($label = 1; $label <= 3; $label++) :
                        $phasen[] = get_field('phase_' . $label);
                    endfor;

                    $fazit = get_field('fazit');
                    $tabelle = get_field('vergleichstabelle');
                    $name = get_field("name");
                    $weitereInfos = get_field("weitere_infos");
                    ?>
                    <!-- Phasen -->


                    <div id="tabbed">
                        <ul id="tabs">
                            <?php for ($label = 1; $label <= 3; $label++) : ?>
                                <li><h3>Phase <?php echo $label; ?></h3></li>
                            <?php endfor; ?>
                            <li><h3><?php _e('Tabelle'); ?></h3></li>
                        </ul> 
                        <ul id="tab">
                            <?php
                            foreach ($phasen as $post) :
                                if ($post) : endif;
                                ?>
                                <li>  <?php echo $post; ?></li>
                            <?php endforeach;
                            ?>
                            <li><?php the_field('vergleichstabelle'); ?></li>
                        </ul>
                    </div>
                    <!-- /Phasen -->
                    <!-- Tabelle -->

                    <?php if ($fazit) : ?>
                        <div id="data">               
                            <?php if ($name) : ?>
                                <p class="name"><?php echo $name; ?></p>
                            <?php endif; ?>
                            <?php if ($weitereInfos) : ?>
                                <em><?php echo $weitereInfos; ?></em>
                            <?php endif; ?>
                            <div id="fazit">

                                <h3>Fazit</h3>
                                <?php echo $fazit; ?>

                            </div>
                        </div>
                    <?php endif; ?> 
                    <!-- /Tabelle -->
                </div>
            <?php endwhile; // end of the loop.    ?>
        </section>
        <!-- /section -->
    </main>
<?php else: ?>
    <main role="main">
        <!-- section -->

        <section class="wrapper site-main">
            <div class="content">
                <!-- article -->
                <article>

                    <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

                </article>
                <!-- /article -->
            </div>
        </section>
        <!-- /section -->
    </main>
<?php endif; ?>


<?php get_footer(); ?>
