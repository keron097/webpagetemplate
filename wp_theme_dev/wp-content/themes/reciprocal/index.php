<?php get_header(); ?>
	
	<div id="page" class="container">
		<div><a href="#" class="image image-full"><img src="<?php echo esc_url(get_template_directory_uri()) ; ?>/images/pic03.jpg" alt="" /></a></div>
		
		<div class="column1 wp_post">
			
		<?php while( have_posts() ) : the_post(); ?>	
			
			<div class="title">
				<h2>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
			</div>
			<p>[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?>]</p>
			<p><?php short_description(20); ?>...<a href="<?php the_permalink(); ?>">[read more]</a></p>
			
		<?php endwhile; ?>
			
		</div>
		<div class="column3">
			<div class="title">
				<h2>Mauris vulputate</h2>
			</div>
			<img src="<?php echo esc_url(get_template_directory_uri()) ; ?>/images/pic01.jpg" width="282" height="150" alt="" />
			<p>Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit.</p>
			<a href="#" class="button">Etiam posuere</a>
		</div>
		<div class="column4">
			<?php dynamic_sidebar('rightsidebar'); ?>
		</div>
	</div>
	<div id="portfolio-wrapper">
		<div id="portfolio" class="container">
			<div class="title">
				<h2>Aenean elementum</h2>
				<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span> </div>
			<div class="column1">
				<div class="box">
					<span class="icon icon-cloud-download"></span>
					<h3>Vestibulum venenatis</h3>
					<p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
					<a href="#" class="button">Etiam posuere</a> </div>
			</div>
			<div class="column2">
				<div class="box">
					<span class="icon icon-coffee"></span>
					<h3>Praesent scelerisque</h3>
					<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
					<a href="#" class="button">Etiam posuere</a> </div>
			</div>
			<div class="column3">
				<div class="box">
					<span class="icon icon-globe"></span>
					<h3>Donec dictum metus</h3>
					<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
					<a href="#" class="button">Etiam posuere</a> </div>
			</div>
			<div class="column4">
				<div class="box">
					<span class="icon icon-dashboard"></span>
					<h3>Mauris vulputate dolor</h3>
					<p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
					<a href="#" class="button">Etiam posuere</a> </div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>

		