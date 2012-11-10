	<!-- Meta Information -->
	<ul class="post_meta">
<li class="vcard author"><address class="fn"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></address></li>
	<li class="post_date"><abbr class="published" title="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></abbr> [<a href="<?php the_permalink(); ?>">Permalink</a>] <?php edit_post_link('Edit'); ?></li>
	<li class="post_tags">Tags: <?php the_category(', ') ?></li>
	<li class="post_comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> [<a href="<?php the_permalink(); ?>#leave-comment">Leave a comment</a>]</li>
	</ul>
