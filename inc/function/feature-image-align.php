<?php
if( ! function_exists( 'charitize_single_post_image_align' ) ) :
    /**
     * charitize default layout function
     *
     * @since  Charitize 1.0.0
     *
     * @param int
     * @return string
     */
    function charitize_single_post_image_align( $post_id = null ){
        global $charitize_customizer_all_values,$post;
        if( null == $post_id && isset ( $post->ID ) ){
            $post_id = $post->ID;
        }
        $charitize_single_post_image_align = $charitize_customizer_all_values['charitize-single-post-image-align'];
        $charitize_single_post_image_align_meta = get_post_meta( $post_id, 'charitize-single-post-image-align', true );

        if( false != $charitize_single_post_image_align_meta ) {
            $charitize_single_post_image_align = $charitize_single_post_image_align_meta;
        }
        return $charitize_single_post_image_align;
    }
endif;