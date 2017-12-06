<?php
if( ! function_exists( 'charitize_excerpt_length' ) ) :

    /**
     * Excerpt length
     *
     * @since  Charitize 1.0.0
     *
     * @param null
     * @return int
     */
function charitize_excerpt_length( $length ){
    global $charitize_customizer_all_values;
    $excerpt_length = $charitize_customizer_all_values['charitize-number-of-archive-words'];
    if ( empty( $excerpt_length) ) {
        $excerpt_length = $length;
    }
    return esc_attr( $excerpt_length );

}

endif;
add_filter( 'excerpt_length', 'charitize_excerpt_length', 999 );