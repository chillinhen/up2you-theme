<?php 
if (have_rows('bildergalerien')):
    while (have_rows('bildergalerien')) : the_row();?>
            <h3><?php the_sub_field('gallery-headline'); ?></h3>
			<?php $images = get_sub_field('bildergalerie');
			if( $images ): ?>
			    <figure class="gallery">
			        <?php foreach( $images as $image ): ?>
			        <figure class="thumbnail">
			          <a href="<?php #echo $image['url']; ?>">
			               <img src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
			          </a>
			          <figcaption class="thumbnail-caption-text"><?php echo $image['caption']; ?></figcaption>
			        </figure>
			        <?php endforeach; ?>
			    </figure>
			    <?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>