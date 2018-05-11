<?php
global $charitize_panels;
/*creating panel for fonts-setting*/
$charitize_panels['charitize-activities-section'] =
    array(
        'title'          => __( 'Home/Front Activity Section', 'charitize' ),
        'priority'       => 200
    );

/* activity section controll options */
// require get_template_directory() . '/inc/customizer/home-activities/options.php';
$charitize_customizer_home_activities_options_path = charitize_file_directory('inc/customizer/home-activities/options.php');
require $charitize_customizer_home_activities_options_path;

/*from page  section options */
// require get_template_directory() . '/inc/customizer/home-activities/from-page.php';
$charitize_customizer_home_activities_from_page_path = charitize_file_directory('inc/customizer/home-activities/from-page.php');
require $charitize_customizer_home_activities_from_page_path;