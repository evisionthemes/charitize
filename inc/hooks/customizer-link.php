<?php

if ( ! function_exists('customizer_link') ) : 


  /**
    * customizer link 
    *
    * @since business-craft 1.0.0
    *
    * @param null
    * @return null
    */


	function customizer_link()
	{
		global $charitize_customizer_all_values;
		

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
   
}

endif ;
add_action('charitize_customizer_link','customizer_link',10);