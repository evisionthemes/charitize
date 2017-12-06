<?php
/**
 * The template for displaying home page.
 * @package Charitize
 */
global $charitize_customizer_all_values;
get_header();
if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
    }

else{
	if (($charitize_customizer_all_values['charitize-feature-slider-enable'] != 1) && ($charitize_customizer_all_values['charitize-activities-enable'] != 1 ) && ($charitize_customizer_all_values['charitize-donate-enable'] != 1 )) {
		if ( current_user_can( 'edit_theme_options' ) ) { ?>
			<section class="wrapper display-info">
				<div class="container">
				<?php echo sprintf(
					__( 'All Section are based on page. Enable each Section from customizer for </br> slider: Home/Front Main Slider -> Setting Options -> Enable. likewise to other sections </br> %s', 'charitize' ),
					'<a class="button" href="' . esc_url( admin_url( 'customize.php' ) ) . '">' . __( 'click here', 'charitize' ) . '</a>'
					); ?>
				</div>
			</section>
		<?php }
	}	
	else{
		/**
		 * charitize_action_front_page hook
		 * @since Charitize 1.0.0
		 *
		 * @hooked charitize_action_front_page -  10
		 * @sub_hooked charitize_action_front_page -  30
		 */
		do_action( 'charitize_action_front_page' );
	}
}
get_footer();