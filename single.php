<?php get_header(); ?>
<div class="container">
<div class="section content_panel" role="main">
<!-- Start the loop -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" class="hentry">
	<h1 class="entry-title"><?php the_title_attribute(); ?></h1>
<div class="entry-content">
	<?php the_content(); ?>
</div>
</article>
<!--h2>Bookmark</h2>
<ul id="social-bookmarks">
<li class="delicious"><a href="http://delicious.com/save?url=<?php the_permalink(); ?>">Delicious</a></li>
<li class="digg"><a href="http://digg.com/submit?url=<?php the_permalink(); ?>">Digg</a></li>
<li class="stumbleupon"><a href="http://stumbleupon.com/submit?url=<?php the_permalink(); ?>">StumbleUpon</a></li>
<li><?php the_flattr_permalink() ?></li>
</ul-->
<?php if(related_posts_exist()) : ?>	
<?php related_posts(); ?>
<?php endif; ?>
	<!-- Comments template -->
	<?php comments_template(); ?>
<?php endwhile; ?>
<!-- If no articles found -->
<?php else : ?>
<div class="article">
<h2>Not Found</h2>
</div>
<!-- End the loop -->
<?php endif; ?>
</div>
<div class="section site_meta">
<div class="aside">
<!-- Meta Information -->
<h2>About this post</h2>
	<ul class="post_meta">
	<li class="post_date"><?php the_date(); ?> [<a href="<?php the_permalink(); ?>">Permalink</a>] <?php edit_post_link('Edit'); ?></li>
	<li class="post_tags">Tags: <?php the_category(', ') ?></li>
	</ul>
<?php the_flattr_permalink() ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
