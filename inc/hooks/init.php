<?php
/**
 * Implement Editor Styles
 *
 * @since Charitize 1.0.0
 *
 * @param null
 * @return null
 *
 */
add_action( 'init', 'charitize_add_editor_styles' );

if ( ! function_exists( 'charitize_add_editor_styles' ) ) :
    function charitize_add_editor_styles() {
        add_editor_style( 'editor-style.css' );
    }
endif;