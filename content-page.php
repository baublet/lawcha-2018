<article <?php post_class(); ?>>

	<?php if(!is_front_page()): ?>
	<header class="entry-header">
		<h1 class="text-4xl font-heading font-thin">
		<?php
			$title = get_the_title();
			if(function_exists('loop_shortcode_title')) {
				echo loop_shortcode_title($title);
				echo loop_shortcode_subtitle(
					$title,
					'<span class="text-5xl font-heading border-b border-solid border-foregroundLight">'
					,'</span>'
				);
			} else {
				echo $title;
			}
		?>
		</h1>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content <?= get_page_template_slug() == 'page-templates/page_long-type.php' ? "longForm" : "" ?>">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">Pages: </span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

</article>
