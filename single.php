<?php get_header(); ?>
<div class="container">
<div class="section content_panel" role="main">
<!-- Start the loop -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" class="hentry">
	<h1 class="entry-title"><?php the_title_attribute(); ?></h1>
<?php
    // date('U')          = Current date in seconds since 1 January 1970 (Unix time)
    // get_the_time('U')  = Date of publication of the article in seconds 1 January 1970 (Unix time)
    // 15778800           = Seconds in six months
    if ((date('U') - get_the_time('U')) >= 15778800) { ?>
    <div class="old-post">
    	<p><strong>Warning</strong> This article was written over six months ago, and may contain outdated information.</p>
    </div>
<?php } ?>

<div class="entry-content">
	<?php the_content(); ?>
</div>
</article>
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
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
