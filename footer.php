<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package eVision themes
 * @subpackage charitize
 * @since Charitize 1.0.0
 */


/**
 * charitize_action_after_content hook
 * @since Charitize 1.0.0
 *
 * @hooked null
 */
do_action( 'charitize_action_after_content' );

/**
 * charitize_action_before_footer hook
 * @since Charitize 1.0.0
 *
 * @hooked null
 */
do_action( 'charitize_action_before_footer' );

/**
 * charitize_action_footer hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_footer - 10
 */
do_action( 'charitize_action_footer' );

/**
 * charitize_action_after_footer hook
 * @since Charitize 1.0.0
 *
 * @hooked null
 */
do_action( 'charitize_action_after_footer' );

/**
 * charitize_action_after hook
 * @since Charitize 1.0.0
 *
 * @hooked charitize_page_end - 10
 */
do_action( 'charitize_action_after' );
?>
<?php wp_footer(); ?>
</body>
</html>