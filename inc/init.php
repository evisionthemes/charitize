<?php
/**
 * evision themes init file
 *
 * @package eVision themes
 * @subpackage Charitize
 * @since Charitize 1.0.0
 */

/**
 * Customizer additions.
 */
// require get_template_directory().'/inc/customizer/customizer.php';
$Charitize_customizer_path = charitize_file_directory('inc/customizer/customizer.php');
require $Charitize_customizer_path;

/**
 * Additional functions.
 */
// require get_template_directory() . '/inc/function/header-logo.php';
$Charitize_customizer_path = charitize_file_directory('inc/function/header-logo.php');
require $Charitize_customizer_path;

// require get_template_directory() . '/inc/function/words-count.php';
$Charitize_words_count_path = charitize_file_directory('inc/function/words-count.php');
require $Charitize_words_count_path;

// require get_template_directory() . '/inc/function/feature-image-align.php';
$Charitize_feature_image_align = charitize_file_directory('inc/function/feature-image-align.php');
require $Charitize_feature_image_align;

/**
* Include sidebar widgets
*/
// require get_template_directory().'/inc/sidebar-widget-init.php';
$Charitize_sidebar_widget_path = charitize_file_directory('inc/sidebar-widget-init.php');
require $Charitize_sidebar_widget_path;


/**
 * Include Hooks
 */
// require get_template_directory().'/inc/hooks/excerpt.php';
$Charitize_excerpt_path = charitize_file_directory('inc/hooks/excerpt.php');
require $Charitize_excerpt_path;

// require get_template_directory().'/inc/hooks/init.php';
$Charitize_init_path = charitize_file_directory('inc/hooks/init.php');
require $Charitize_init_path;

// require get_template_directory().'/inc/hooks/header.php';
$Charitize_header_path = charitize_file_directory('inc/hooks/header.php');
require $Charitize_header_path;

// require get_template_directory().'/inc/hooks/home-main-slider.php';
$Charitize_home_main_slider_path = charitize_file_directory('inc/hooks/home-main-slider.php');
require $Charitize_home_main_slider_path;

// require get_template_directory().'/inc/hooks/home-activity-section.php';
$Charitize_activity_section_path = charitize_file_directory('inc/hooks/home-activity-section.php');
require $Charitize_activity_section_path;

// require get_template_directory().'/inc/hooks/home-donate-section.php';
$Charitize_home_donate_section_path = charitize_file_directory('inc/hooks/home-donate-section.php');
require $Charitize_home_donate_section_path;

// require get_template_directory().'/inc/hooks/footer.php';
$Charitize_footer_path = charitize_file_directory('inc/hooks/footer.php');
require $Charitize_footer_path;

// require get_template_directory().'/inc/hooks/init.php';
$Charitize_hooks_init = charitize_file_directory('inc/hooks/init.php');
require $Charitize_hooks_init;


// require get_template_directory().'/inc/hooks/wp-head.php';
$Charitize_wp_head_path = charitize_file_directory('inc/hooks/wp-head.php');
require $Charitize_wp_head_path;

 /* 
 Layout additions
 */
// require get_template_directory() . '/inc/post-meta/layout-meta.php';
 $Charitize_layout_meta_path = charitize_file_directory('inc/post-meta/layout-meta.php');
 require $Charitize_layout_meta_path;

// require get_template_directory().'/inc/hooks/customizer-link.php';
 $Charitize_customizer_link_path = charitize_file_directory('inc/hooks/customizer-link.php');
 require $Charitize_customizer_link_path;
