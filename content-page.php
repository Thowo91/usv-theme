<?php while ( have_posts() ) : the_post(); ?>
	<h3>Content Page</h3>
	<article>
		<header>
			<h2><?php the_title(); ?></h2>
		</header>
		<div>
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>