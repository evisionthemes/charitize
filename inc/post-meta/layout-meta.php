<?php
/**
 * charitize Custom Metabox
 *
 * @package charitize
 */
$charitize_post_types = array(
    'post',
    'page'
);

add_action('add_meta_boxes', 'charitize_add_layout_metabox');
function charitize_add_layout_metabox() {
    global $post;
    $frontpage_id = get_option('page_on_front');
    if( $post->ID == $frontpage_id ){
        return;
    }

    global $charitize_post_types;
    foreach ( $charitize_post_types as $post_type ) {
        add_meta_box(
            'charitize_layout_options', // $id
            __( 'Layout options', 'charitize' ), // $title
            'charitize_layout_options_callback', // $callback
            $post_type, // $page
            'normal', // $context
            'high'// $priority
        );
    }

}

/* charitize featured layout */
$charitize_single_post_image_align_options = array(
    'full' => array(
        'value' => 'full',
        'label' => __( 'Full', 'charitize' )
    ),
    'right' => array(
        'value' => 'right',
        'label' => __( 'Right ', 'charitize' ),
    ),
    'left' => array(
        'value'     => 'left',
        'label' => __( 'Left', 'charitize' ),
    ),
    'no-image' => array(
        'value'     => 'no-image',
        'label' => __( 'No Image', 'charitize' )
    )
);

function charitize_layout_options_callback() {

    global $post , $charitize_single_post_image_align_options;
    $charitize_customizer_saved_values = charitize_get_all_options(1);

    /*charitize-single-post-image-align*/
    $charitize_single_post_image_align = $charitize_customizer_saved_values['charitize-single-post-image-align'];

    wp_nonce_field( basename( __FILE__ ), 'charitize_layout_options_nonce' );
    ?>
    <style>
        .hide-radio{
            position: relative;
            margin-bottom: 6px;
        }

        .hide-radio img, .hide-radio label{
            display: block;
        }

        .hide-radio input[type="radio"]{
            position: absolute;
            left: 50%;
            top: 50%;
            opacity: 0;
        }

        .hide-radio input[type=radio] + label {
            border: 3px solid #F1F1F1;
        }

        .hide-radio input[type=radio]:checked + label {
            border: 3px solid #CCC;
        }
    </style>
    <table class="form-table page-meta-box">
        <!--Image alignment-->
        <tr>
            <td colspan="4"><?php _e( 'Featured Image Alignment', 'charitize' ); ?></td>
        </tr>
        <tr>
            <td>
                <?php
                $charitize_single_post_image_align_meta = get_post_meta( $post->ID, 'charitize-single-post-image-align', true );
                if( false != $charitize_single_post_image_align_meta ){
                    $charitize_single_post_image_align = $charitize_single_post_image_align_meta;
                }
                foreach ($charitize_single_post_image_align_options as $field) {
                    ?>
                    <input id="<?php echo esc_attr( $field['value'] ); ?>" type="radio" name="charitize-single-post-image-align" value="<?php echo esc_attr( $field['value'] ); ?>" <?php checked( $field['value'], $charitize_single_post_image_align ); ?>/>
                    <label class="description" for="<?php echo esc_attr( $field['value'] ); ?>">
                        <?php echo esc_html( $field['label'] ); ?>
                    </label>
                <?php } // end foreach
                ?>
                <div class="clear"></div>
            </td>
        </tr>
    </table>

<?php }

/**
 * save the custom metabox data
 * @hooked to save_post hook
 */
function charitize_save_sidebar_layout( $post_id ) {
    global $post;
    // Verify the nonce before proceeding.
    if ( !isset( $_POST[ 'charitize_layout_options_nonce' ] ) || !wp_verify_nonce( $_POST[ 'charitize_layout_options_nonce' ], basename( __FILE__ ) ) ) {
        return;
    }

    // Stop WP from clearing custom fields on autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    /*image align*/
    if(isset($_POST['charitize-single-post-image-align'])){
        $old = get_post_meta( $post_id, 'charitize-single-post-image-align', true);
        $new = sanitize_text_field($_POST['charitize-single-post-image-align']);
        if ($new && $new != $old) {
            update_post_meta($post_id, 'charitize-single-post-image-align', $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id,'charitize-single-post-image-align', $old);
        }
    }
}
add_action('save_post', 'charitize_save_sidebar_layout');
