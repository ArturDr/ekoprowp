<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article>
                <h2><?php the_title(); ?></h2>
                <div class="info">
		        <span><?php the_author(); ?></span> | <span><?php the_time('d-m-Y'); ?></span>
	        </div>
                <p><?php the_excerpt(); ?></p>
                <a class="more" href="<?php the_permalink(); ?>"> Czytaj wiecej </a>
        </article>
    <?php endwhile; ?>
<?php else: ?>
        <h2>Nic nie znaleziono.</h2>
<?php endif; ?>
<div class="navigation-bottom">
        <?php next_posts_link('<< Starsze artykuly'); ?> | <?php previous_posts_link('Nowsze artykuly >>'); ?>
</div>