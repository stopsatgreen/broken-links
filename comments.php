<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>
<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = '';

?>
<?php if ($comments) : ?>
<h2 id="comments"><?php comments_number('0 comments', '1 comment', '% comments'); ?>  on<br /> &#8220;<?php the_title(); ?>&#8221;</h2>
<ol id="comments_list">
<?php foreach ($comments as $comment) : ?>
<li class="<?php if ($comment->comment_author_email == 'p_gasston@yahoo.com') echo 'author'; else echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
<?php if ($comment->comment_approved == '0') : ?>
	<p><em><?php _e('Your comment is awaiting moderation.'); ?></em></p>
<?php endif; ?>
	<?php comment_text() ?>
<?php 
   echo get_avatar( $comment, $size = '35' ); 
?>
<h3><span><?php comment_author_link() ?></span> [<a href="#comment-<?php comment_ID() ?>"><?php comment_date('F jS, Y') ?>, <?php comment_time() ?></a>] <?php edit_comment_link('Edit','',''); ?></h3>
</li>
<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>
</ol>
<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
<h2 id="leave-comment">Leave a comment</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<fieldset>
<p><label for="author">Name<?php if ($req) echo ' (required)'; ?>:</label><input type="text" class="text" name="author" id="author" value="" tabindex="1" <?php if ($req) echo 'aria-required="true" required'; ?>></p>

<p><label for="email">Mail (hidden)<?php if ($req) echo ' (required)'; ?>:</label><input type="email" class="text" name="email" id="email" value="" tabindex="2" <?php if ($req) echo 'aria-required="true" required'; ?>></p>

<p><label for="url">Website:</label><input type="url" class="text" name="url" id="url" value="" tabindex="3"></p>
</fieldset>

<?php endif; ?>
<fieldset>
<p><label for="comment">Comment:</label>
<textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea></p>
<p><small><strong>XHTML:</strong> You can use these tags: &lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </small></p>
</fieldset>
<p>
<button name="submit" type="submit" id="submit" tabindex="5">Submit Comment</button>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>