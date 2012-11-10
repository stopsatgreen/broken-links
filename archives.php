<?php
/*
Template Name: Archive Index
*/
?>
<?php get_header(); ?>
<div class="container">
<div class="section content_panel">
<!-- Start the loop -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="article">
	<h1><?php the_title_attribute(); ?></h1>
<?php the_content(); ?>
<h2>By Month</h2>
	<ul class="category">	
	<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
	</ul>

<hr />

	<h2>By Category</h2>
	<ul class="category">
	<?php wp_list_categories('title_li=&show_count=1'); ?>
	</ul>
	
<hr />

<h2>By Tag</h2>

<?php wp_tag_cloud('smallest=1&largest=1.8&unit=em&format=list'); ?>

	</div>
	
<?php endwhile; ?>
<!-- If no articles found -->
<?php else : ?>
	<div class=”article”>
	<h2>Not Found</h2>
	</div>
<!-- End the loop -->
<?php endif; ?>

</div>
<div class="section site_meta">
	<div class="aside">

<h2>Spam Count</h2>
<p><strong><?php $AksimetCount = number_format(get_option('akismet_spam_count')); if($AksimetCount) { echo $AksimetCount; } ?></strong> spam comments have been blocked by <a href="http://akismet.com/">Akismet</a> since I launched this blog.</p>
	
	</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>