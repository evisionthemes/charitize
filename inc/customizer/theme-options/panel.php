<?php
global $charitize_panels;
/*creating panel for fonts-setting*/
$charitize_panels['charitize-theme-options'] =
    array(
        'title'          => __( 'Theme Options', 'charitize' ),
        'priority'       => 220
    );

/*layout options */
// require get_template_directory().'/inc/customizer/theme-options/layout-options.php';
$charitize_layout_options_path = charitize_file_directory('inc/customizer/theme-options/layout-options.php');
require $charitize_layout_options_path;

/*footer options */
// require get_template_directory().'/inc/customizer/theme-options/footer.php';
$charitize_themes_footer_path = charitize_file_directory('inc/customizer/theme-options/footer.php');
require $charitize_themes_footer_path;

/*header options */
// require get_template_directory().'/inc/customizer/theme-options/header.php';
$charitize_themes_header_path = charitize_file_directory('inc/customizer/theme-options/header.php');
require $charitize_themes_header_path;

/*custom css options */
// require get_template_directory().'/inc/customizer/theme-options/custom-css.php';
$charitize_themes_custom = charitize_file_directory('inc/customizer/theme-options/custom-css.php');
require $charitize_themes_custom;


