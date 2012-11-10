<?php get_header(); ?>
<div id="container">
<div class="section content_panel">
<!-- Start the loop -->
	<div class="article intro">
	<h1>Search Results</h1>
<p><?php echo $wp_query->found_posts; ?> results found for &#8220;<em><?php echo get_search_query(); ?></em>&#8221;</p>
	</div>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php include(TEMPLATEPATH . '/hentry.php'); ?>
	<?php include(TEMPLATEPATH . '/site_meta.php'); ?>
</div>
<hr />
<?php endwhile; ?>
<!-- If no articles found -->
<?php else : ?>
</div>
	<div class=”article”>
	<h2>Not Found</h2>
	</div>
<!-- End the loop -->
<?php endif; ?>
<!-- !!! STYLE ME !!! -->
<p><?php posts_nav_link('between','before','after'); ?></p>
</div>
<div class="section" id="site_meta">
<?php include(TEMPLATEPATH . '/searchform.php'); ?>
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