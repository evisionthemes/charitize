<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Charitize
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() ) : ?>
	<div class="wrapper">
		<div class="container">
		    <div class="row">
		        <div class="col-md-12 col-sm-12 col-xs-12">
						<header class="entry-header">
							<h1 class="page-title"><?php single_post_title(); ?></h1>
						</header>
		        </div>
		    </div>
		</div>
	</div>
<?php endif; ?>
<section class="wrapper">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				/**
				 * charitize_action_posts_navigation hook
				 *
				 * @hooked: charitize_posts_navigation - 10
				 *
				 * @since  Charitize 1.0.0
				 */
				do_action( 'charitize_action_posts_navigation' );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- #content -->
</section>
<?php get_footer(); ?>