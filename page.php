<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package DrautaKit
 */

get_header(); ?>
<div class="clear">
	<main id="main" class="container" role="main">
		<div id="primary" class="content-area g-wide--3 g-medium--half">


						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'page' ); ?>

							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || '0' != get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // end of the loop. ?>
				</div><!-- #primary -->
</main><!-- #main -->



	<div class="g-wide--1 g-wide--last g-medium--half g--last">
			<?php get_sidebar(); ?>
	</div>
</div>
<div class="clear">
		<div class="g-medium--full g-wide--fullt">
		<?php get_footer(); ?>
		</div>
</div>
