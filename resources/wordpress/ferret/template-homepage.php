<?php
/*
Template Name: Home Page
*/
?>
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
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div><!--/.box-16-->
		</article><!--/.row-->
		<hr/>
        <?php endwhile; else: ?>
		<?php endif; ?>
	</div><!--/.container-->
</main>

<?php get_footer(); ?>
