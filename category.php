<?php get_header(); ?>
<div class="container">
<div class="section content_panel">
<!-- Start the loop -->
	<div class="article intro">
	<h1>Category: <?php single_cat_title(); ?></h1>
	<?php echo category_description(); ?>
	</div>
<div class="hfeed">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?php include(TEMPLATEPATH . '/hentry.php'); ?>
	<?php include(TEMPLATEPATH . '/post_meta.php'); ?>
	</div>
<hr />
<?php endwhile; ?>
<!-- If no articles found -->
<?php else : ?>
	<div class="article">
	<h2>Not Found</h2>
	</div>
<!-- End the loop -->
<?php endif; ?>
</div>
<!-- !!! STYLE ME !!! -->
<p class="pagination"><?php posts_nav_link(' | ','Newer','Older'); ?></p>
</div>
<div class="section site_meta">
	<div class="aside">
<?php $my_query = new WP_Query('showposts=1&cat=4');
while ($my_query->have_posts()) : $my_query->the_post();
if ( $post->ID == $do_not_duplicate ) continue;
update_post_caches($posts);
$do_not_duplicate = $post->ID; ?>

<h2>Aside</h2>
<?php the_content(); ?>
<p>[<a href="<?php the_permalink(); ?>">#</a>] <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?> <?php edit_post_link('E',' | '); ?></p>
<?php break; ?>
<?php endwhile; ?>
	
	</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
