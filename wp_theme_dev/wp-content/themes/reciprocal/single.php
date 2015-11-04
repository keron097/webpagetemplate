<?php get_header(); ?>

	<div id="page" class="container">
		<div class="wp_post">
			<?php while( have_posts() ) : the_post(); ?>	
				
				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div>
				<?php the_post_thumbnail(); ?>
				<p><?php the_content(); ?></p>
			
			<?php endwhile; ?>
		</div>
	</div>
	
<?php get_footer(); ?>			