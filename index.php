<?php get_header(); ?>
<div class="container">
<div class="section content_panel" role="main">
<!-- Start the loop -->
<div class="hfeed">
<?php
if(have_posts()) : while(have_posts()) : the_post();
if( $post->ID == $do_not_duplicate) continue;
update_post_caches($posts);
?>

	<?php if ( has_post_format( 'aside' )) {
    include(TEMPLATEPATH . '/aside.php');
  } else {
    include(TEMPLATEPATH . '/hentry.php');
    echo '<hr />';
	  include(TEMPLATEPATH . '/post_meta.php');
  } ?>
	</div>
<?php endwhile; ?>
<!-- If no articles found -->
<?php else : ?>
<div class="article">
<h2>Not Found</h2>
</div>
<!-- End the loop -->
<?php endif; ?>
</div>
<p><a class="more-link" href="<?php bloginfo('siteurl');?>/archives/">Archive by category and date</a></p>
</div>
<div class="section site_meta">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
