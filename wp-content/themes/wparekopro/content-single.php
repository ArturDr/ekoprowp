<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
        <h2> <?php the_title(); ?> </h2>
        <div class="info">
			<span><?php the_author(); ?></span> | <span><?php the_time('d-m-Y'); ?></span>
		</div>
		<p> <?php the_content(); ?> </p>
    </article>

<?php endwhile; ?>
<?php else : ?>
	<h2> Nic nie znaleziono.</h2>
<?php endif; ?>

<div class="navigation-bottom">
    <?php previous_post_link();?> | <?php next_post_link();?>
</div>