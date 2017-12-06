<?php
global $charitize_panels;
/*creating panel for Donate Section setting*/
$charitize_panels['charitize-donate-panel'] =
    array(
        'title'          => __( 'Home/Front Donate Section', 'charitize' ),
        'priority'       => 210
    );


/*donate section enable control */
require get_template_directory().'/inc/customizer/home-donate/options.php';

/*donate selection settings */
require get_template_directory().'/inc/customizer/home-donate/settings.php';