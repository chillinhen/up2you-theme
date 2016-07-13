<?php
// check if the repeater field has rows of data
if (have_rows('preisliste')):
    ?>
    <h3><?php _e('Preise', 'up2you-theme');?></h3>
    <table class="preise">
        <?php
        // loop through the rows of data
        while (have_rows('preisliste')) : the_row();
            ?>
            <tr>
                <td class="label"><?php the_sub_field('beschreibung'); ?></td>
				<td class="content"><?php the_sub_field('inhalte'); ?></td>
                <td class="preis"><?php the_sub_field('preis'); ?></td>  
            </tr>
        <?php endwhile; ?>
    </table>
<?php endif; ?>