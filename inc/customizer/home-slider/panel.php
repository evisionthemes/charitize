<?php
global $charitize_panels;
/*creating panel for fonts-setting*/
$charitize_panels['charitize-feature-slider'] =
    array(
        'title'          => __( 'Home/Front Main Slider', 'charitize' ),
        'priority'       => 200
    );

/*slider selection from slider options */
// require get_template_directory().'/inc/customizer/home-slider/options.php';
$charitize_customizer_home_salider_options = charitize_file_directory('inc/customizer/home-slider/options.php');
require $charitize_customizer_home_salider_options;

/*slider selection from slider settings */
// require get_template_directory().'/inc/customizer/home-slider/settings.php';
$charitize_customizer_home_salider_settings = charitize_file_directory('inc/customizer/home-slider/settings.php');
require $charitize_customizer_home_salider_settings;


/*slider selection from slider from page */
// require get_template_directory().'/inc/customizer/home-slider/from-page.php';
$charitize_customizer_home_salider_from_page_path = charitize_file_directory('inc/customizer/home-slider/from-page.php');
require $charitize_customizer_home_salider_from_page_path;


