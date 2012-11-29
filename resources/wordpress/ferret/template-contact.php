<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<section id="content" class="first">
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
				<?php the_content(); ?>
			</div><!--/.box-16-->
		</article><!--/.row-->
		<hr/>
        <?php endwhile; else: ?>
		<?php endif; ?>
	</div><!--/.container-->
</section>

<?php get_footer(); ?>
