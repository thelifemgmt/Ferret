<?php get_header(); ?>

<main id="content" class="first-section" role="main">
    <div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="row with-spacing">
            <div class="box-16">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
				?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F j') ?></time>
                <div class="author">
                	<?php echo get_avatar( get_the_author_meta('ID')); ?>
                    <span>By: <?php the_author(); ?></span>
                </div><!--/.author-->
                <div class="comment-count">
					<?php comments_number( '', '1 comment', '% comments' ); ?>
                </div><!--/.comment-count-->				
				<?php the_content(); ?>
			</div><!--/.box-16-->
		</article><!--/.row-->
		<hr/>
        <?php endwhile; else: ?>
		<?php endif; ?>
	</div><!--/.container-->
</main>

<?php get_footer(); ?>
