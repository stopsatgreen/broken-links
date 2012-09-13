<?php /*
Example template
Author: mitcho (Michael Yoshitaka Erlewine)
*/ 
?><h2>(Possibly) Related Posts</h2>
<?php if ($related_query->have_posts()):?>
<ul class="related">
	<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></li>
	<?php endwhile; ?>
</ul>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
