<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die(); ?>
<?php if (comments_open()): ?>
<section id="comments">
    
	<ol class="commentlist">
		<?php wp_list_comments('type=pings');?>
		<?php wp_list_comments('type=comment');?>
	</ol>
	
	
	<h3></h3>
    <form action="<?php echo (defined('WP_SITEURL'))? WP_SITEURL: get_bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform">
    	<fieldset>
    	    <ol>
    	        <li>
					<label for="commentsAuthor"><?php _e('Name (*)', 'ia3'); ?></label>
					<input id="commentsAuthor" name="author" type="text"value="<?php echo esc_attr($comment_author); ?>" required="required" />
				</li>
				<li>
					<label for="commentsEmail"><?php _e('Email (*)', 'ia3'); ?></label>
					<input id="commentsEmail" name="email" type="text"value="<?php echo esc_attr($comment_author_email); ?>" required="required" />
				</li>
				<li>
					<label for="commentsUrl"><?php _e('Website', 'ia3'); ?></label>
					<input id="commentsUrl" name="url" type="text"value="<?php echo esc_attr($comment_author_url); ?>" />
				</li>
    	        <li>
    	            <label for="commentsComment"><?php _e('Your comment', 'ia3'); ?></label>
    				<textarea cols="60" id="commentsComment" name="comment" rows="10"></textarea>
    	        </li>
    	        <li>
    	            <input id="commentsSubmit" type="submit" value="<?php _e('Submit', 'ia3'); ?>" />
    				<?php comment_id_fields(); ?>
    	        </li>
    	    </ol>
    	</fieldset>
    </form>
</section><!-- #comments -->
<?php endif; ?>