		<?php $altcomment = 'alt'; ?>
		<?php if ($comments) : ?>
			<div class="box-16">
				<h3>Comments</h3>
				<?php foreach ($comments as $comment) : ?>
		        <?php echo get_avatar(get_comment_author_email(),'40'); ?>
		        <span><?php comment_author_link(); ?> Posted on: <?php comment_date('F j') ?></span>
		        <?php comment_text(); ?>
		        <?php endforeach; ?>
			</div><!--/.box-16-->
		<?php endif; ?>
		
			<div class="box-16">
				<?php if ($post->comment_status == 'open') : ?>
				<h3>Leave a Comment</h3>
		        <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform">
		        	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
		            
		            <div class="row">
		            	<div class="box-6">
		            		<input class="inputfield" type="text" name="author" id="author" placeholder="full name">
		            	</div><!--/.box-6-->
		            </div><!--/.row-->
		            
		            <div class="row">
		            	<div class="box-6">
		            		<input class="inputfield" type="text" name="email" id="email" placeholder="email address">
		            	</div><!--/.box-6-->
		            </div><!--/.row-->
		            
		            <div class="row">
		            	<div class="box-6">
		            		<input class="inputfield" type="url" name="url" id="url" placeholder="website url">
		            	</div><!--/.box-6-->
		            </div><!--/.row-->
		            
		            <div class="row">
		            	<div class="box-10">
		            		<textarea class="inputfield" name="comment" id="data" placeholder="comment"></textarea>
		            	</div><!--/.box-10-->
		            </div><!--/.row-->
		            
		            <div class="row">
		            	<div class="box-6">
		            		<input class="button submit fade" name="submit" type="submit" id="submit" value="leave comment">
		            	</div><!--/.box-6-->
		            </div><!--/.row-->
		        <?php do_action('comment_form', $post->ID); ?>
		        </form>
		        <?php endif; ?>
			</div><!--/.box-16-->
			