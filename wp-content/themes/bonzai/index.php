<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bonzai
 */

get_header();
?>
<?php get_template_part( 'headers/gallery-header'); ?>
	<div id="primary" class="main-container">
		<?php get_template_part( 'headers/tag-slider'); ?>

		<main id="main" class="site-main" style="">
<!-- 				<div class="uma-grid">
					<div class="uma-grid-item" style="background-color:green;"> Hi there</div>
					<div class="uma-grid-item" style="background-color:blue;">Good to see you</div>
					<div class="uma-grid-item" style="background-color:red;">welcome </div>
					<div class="uma-grid-item" style="background-color:purple;"> Hi there</div>
					<div class="uma-grid-item" style="background-color:orange;">Good to see you</div>
					<div class="uma-grid-item" style="background-color:pink;">welcome </div>
				</div> -->

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				
			<?php endif; ?>
				<div class="uma-grid">
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/card');

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
