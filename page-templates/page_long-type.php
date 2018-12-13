<?php
/* Template Name: Long Type */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main type" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			<article <?php post_class(); ?>>

			<?php if(!is_front_page()): ?>
			<header class="entry-header">
				<h1 class="text-4xl">
				<?php
					$title = get_the_title();
					if(function_exists('loop_shortcode_title')) {
						echo loop_shortcode_title($title);
						echo loop_shortcode_subtitle(
							$title,
							'<span class="text-2xl font-normal font-thin">'
							,'</span>'
						);
					} else {
						echo $title;
					}
				?>
				</h1>
			</header><!-- .entry-header -->
			<?php endif; ?>
		
			<div class="entry-content longForm">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		
		</article>
		

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
