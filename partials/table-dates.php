<?php
$date_headline = get_field('date-headline');
// check if the repeater field has rows of data
if (have_rows('dates')):
    ?>
    <h3><?php echo $date_headline;?></h3>
    <table class="dates">
        <?php
        // loop through the rows of data
        while (have_rows('dates')) : the_row();
            ?>
            <tr>
                <td class="date"><?php the_sub_field('date'); ?></td>
				<td class="day"><?php the_sub_field('day'); ?></td>
                <td class="time"><?php the_sub_field('time'); ?></td>  
                <td class="activity"><?php the_sub_field('activity'); ?></td>  
                <td class="level"><?php the_sub_field('level'); ?></td> 
            </tr>
        <?php endwhile; ?>
    </table>
<?php endif; ?>