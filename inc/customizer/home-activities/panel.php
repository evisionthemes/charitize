<?php
global $charitize_panels;
/*creating panel for fonts-setting*/
$charitize_panels['charitize-activities-section'] =
    array(
        'title'          => __( 'Home/Front Activity Section', 'charitize' ),
        'priority'       => 200
    );

/* activity section controll options */
require get_template_directory() . '/inc/customizer/home-activities/options.php';

/*from page  section options */
require get_template_directory() . '/inc/customizer/home-activities/from-page.php';