<?php
global $charitize_panels;
/*creating panel for fonts-setting*/
$charitize_panels['charitize-feature-slider'] =
    array(
        'title'          => __( 'Home/Front Main Slider', 'charitize' ),
        'priority'       => 200
    );

/*slider selection from slider options */
require get_template_directory().'/inc/customizer/home-slider/options.php';

/*slider selection from slider settings */
require get_template_directory().'/inc/customizer/home-slider/settings.php';

/*slider selection from slider from page */
require get_template_directory().'/inc/customizer/home-slider/from-page.php';

