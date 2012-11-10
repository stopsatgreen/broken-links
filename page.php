<?php get_header(); ?>
<div id="container">
<?php include(TEMPLATEPATH . '/legacy/ie6.php'); ?>
<div class="section content_panel">
<!-- Start the loop -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="article" id="page-<?php the_ID(); ?>">
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	</div>
<?php endwhile; ?>
<!-- If no articles found -->
<?php else : ?>
<div class="article">
<h2>Not Found</h2>
</div>
<!-- End the loop -->
<?php endif; ?>
<!-- !!! STYLE ME !!! -->
<p><?php posts_nav_link('between','before','after'); ?></p>
</div>
<div class="section" id="site_meta">
<div class="aside">
<?php if (is_page('about-me-this-site')) { ?>
	<?php if ( !dynamic_sidebar() ) : ?>
	<p>No sidebar</p>
<?php endif; ?>
<?php } else { ?>
<h2>Find me elsewhere</h2>
<ul>
<?php wp_list_bookmarks('categorize=0&title_li='); ?>
</ul>
<?php } ?>	
	</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
