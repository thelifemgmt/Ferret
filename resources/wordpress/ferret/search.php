<?php get_header(); ?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="box-16">
				<h2><?php the_title(); ?></h2>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="page_post">
					<?php the_content(); ?>
				</div><!--/.page_post-->
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div><!--/.box-16-->
		</div><!--/.row-->
	</div><!--/.container-->
</section>

<?php get_footer(); ?>