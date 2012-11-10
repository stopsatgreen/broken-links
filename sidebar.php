	<div class="navigation site_meta_container">
		<div class="book">
			<h2>The Book of CSS3</h2>
			<p>My first book is out now from No Starch Press. <a href="http://nostarch.com/css3.htm">Buy it from the publisher</a> or from <a href="http://www.amazon.co.uk/gp/product/1593272863?ie=UTF8&tag=brokenlinks-21&linkCode=as2&camp=1634&creative=6738&creativeASIN=1593272863">Amazon.co.uk</a>, <a href="http://www.amazon.com/gp/product/1593272863?ie=UTF8&tag=broklink-20&link_code=as3&camp=211189&creative=373489&creativeASIN=1593272863">Amazon.com</a>.</p>
		</div>
<div id="influads_block" class="influads_block"></div>
<?php if (!is_home()) { ?>
		<ul class="posts-popular">
		<li><h3>Recent Posts</h3></li>
		<?php mdv_recent_posts(); ?>
		</ul>
<?php } ?>
<?php if (is_home()) { ?>
		<ul>
		<li><h3>Recent Comments</h3></li>
<?php get_recent_comments(); ?>
		<?php //mdv_recent_comments(5,8,'<li>','...</li>'); ?>
		</ul>
<?php } ?>
		<ul class="posts-popular">
		<li><h3>Popular Posts</h3></li>
		<?php getPopularPosts(5,7,' &raquo; Broken Links'); ?>
		</ul>	
	<hr class="ornament" />
	<ul>
	<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">Subscribe to the RSS Feed</a></li>
	</ul>
	</div>
