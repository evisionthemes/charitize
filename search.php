<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Charitize
 */

get_header(); ?>
<div class="wrapper page-inner-title">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12 col-sm-12 col-xs-12">
				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'charitize' ), '<span>' . esc_attr(get_search_query()) . '</span>' ); ?></h1>
				</header><!-- .page-header -->
	        </div>
	    </div>
	</div>
</div>
<?php 
/**
 * charitize_action_after_header hook
 * @since charitize 1.0.0
 *
 * @hooked null
 */
do_action( 'charitize_action_after_header' );
?>
<section class="wrapper wrap-content">
	<div class= "site-content">
		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</section>
<?php
get_footer();
