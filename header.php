<?php
/**
 * The default template for displaying header
 *
 * @package eVision themes
 * @subpackage charitize
 * @since Charitize 1.0.0
 */

/**
 * charitize_action_before_head hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_set_global -  0
 * @hooked charitize_doctype -  10
 */
do_action( 'charitize_action_before_head' );?>
<head>

	<?php
	/**
	 * charitize_action_before_wp_head hook
	 * @since Charitize 1.0.0
	 *
	 * @hooked charitize_before_wp_head -  10
	 */
	do_action( 'charitize_action_before_wp_head' );

	wp_head();

	/**
	 * charitize_action_after_wp_head hook
	 * @since Charitize 1.0.0
	 *
	 * @hooked null
	 */
	do_action( 'charitize_action_after_wp_head' );
	?>

</head>

<body <?php body_class(); ?>>


<?php
/**
 * charitize_action_before hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_page_start - 15
 */
do_action( 'charitize_action_before' );

/**
 * charitize_action_pre_loader_header hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_action_pre_loader_header - 10
 */
do_action( 'charitize_action_pre_loader_header' );

/**
 * charitize_action_after_page_id hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_social_menu - 15
 */
do_action( 'charitize_action_after_page_id' );

/**
 * charitize_action_before_header hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_skip_to_content - 10
 */
do_action( 'charitize_action_before_header' );

/**
 * charitize_action_header hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_after_header - 10
 */
do_action( 'charitize_action_header' );


/**
 * charitize_action_after_header hook
 * @since Charitize 1.0.0
 *
 * @hooked null
 */
//do_action( 'charitize_action_after_header' );