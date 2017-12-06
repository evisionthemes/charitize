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
require get_template_directory().'/inc/customizer/customizer.php';

/**
 * Additional functions.
 */
require get_template_directory() . '/inc/function/header-logo.php';

require get_template_directory() . '/inc/function/words-count.php';

require get_template_directory() . '/inc/function/feature-image-align.php';

/**
* Include sidebar widgets
*/
require get_template_directory().'/inc/sidebar-widget-init.php';


/**
 * Include Hooks
 */
require get_template_directory().'/inc/hooks/excerpt.php';

require get_template_directory().'/inc/hooks/init.php';

require get_template_directory().'/inc/hooks/header.php';

require get_template_directory().'/inc/hooks/home-main-slider.php';

require get_template_directory().'/inc/hooks/home-activity-section.php';

require get_template_directory().'/inc/hooks/home-donate-section.php';

require get_template_directory().'/inc/hooks/footer.php';

require get_template_directory().'/inc/hooks/init.php';

require get_template_directory().'/inc/hooks/wp-head.php';


 /* 
 Layout additions
 */
 require get_template_directory() . '/inc/post-meta/layout-meta.php';
