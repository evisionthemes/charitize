<?php
/**
* Returns word count of the sentences.
*
* @since @since Charitize 1.0.0
*/
if ( ! function_exists( 'charitize_words_count' ) ) :
	function charitize_words_count( $length = 25, $charitize_content = null ) {
		$length = absint( $length );
		$source_content = preg_replace( '`\[[^\]]*\]`', '', $charitize_content );
		$trimmed_content = wp_trim_words( $source_content, $length, '...' );
		return $trimmed_content;
	}
endif;