<?php
/**
 * The template for displaying posts
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of posts and that
 * other "posts" on your WordPress site will use a different template.
 *
 */

get_header(); ?>

        <main id="main" role="main">

        <?php
        // Start the loop.
        while (have_posts()) :
            the_post();

            // Include the page content template.
            get_template_part('content', get_post_type());
            
            related_posts();
            
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        // End the loop.
        endwhile;

        ?>

        </main>

<?php get_footer(); ?>
