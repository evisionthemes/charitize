<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*creating panel for general*/
$charitize_panels['charitize-colors'] =
    array(
        'title'          => __( 'Colors', 'charitize' ),
        'description'    => __( 'Customize colors of you awesome site', 'charitize' ),
        'priority'       => 42,
    );

/*Default color*/
$charitize_sections['colors'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Basic Colors Options', 'charitize' ),
        'panel'          => 'charitize-colors',
    );
/*charitize colors*/
$charitize_sections['charitize-colors-reset'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Charitize Colors Reset', 'charitize' ),
        'panel'          => 'charitize-colors',
    );
/*defaults values*/
$charitize_customizer_defaults['charitize-main-link-color'] = '#313131';
$charitize_customizer_defaults['charitize-banner-text-color'] = '#fff';
$charitize_customizer_defaults['charitize-site-identity-color'] = '#332e2b';

$charitize_customizer_defaults['charitize-color-reset'] = '';


/**
 * Reset color settings to default
 * @param  $input
 *
 * @since charitize 1.0
 */
if ( ! function_exists( 'charitize_color_reset' ) ) :
    function charitize_color_reset( ) {
        
            global $charitize_customizer_saved_values;
           $charitize_customizer_saved_values = charitize_get_all_options();
        if ( $charitize_customizer_saved_values['charitize-color-reset'] == 1 ) {
            global $charitize_customizer_defaults;
            global $charitize_customizer_saved_values;

            /*setting fields */
            $charitize_customizer_saved_values['charitize-main-link-color'] = $charitize_customizer_defaults['charitize-main-link-color'];
            $charitize_customizer_saved_values['charitize-banner-text-color'] = $charitize_customizer_defaults['charitize-banner-text-color'];
            $charitize_customizer_saved_values['charitize-site-identity-color'] = $charitize_customizer_defaults['charitize-site-identity-color'];


            remove_theme_mod( 'background_color' );
            $charitize_customizer_saved_values['charitize-color-reset'] = '';
            /*resetting fields*/
            charitize_reset_options( $charitize_customizer_saved_values );

        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','charitize_color_reset' );





$charitize_settings_controls['charitize-site-identity-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-site-identity-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Site Identity Color', 'charitize' ),
            'description'           =>  __( 'Site title and tagline color', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-banner-text-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-banner-text-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Text Over Image Color', 'charitize' ),
            'description'           =>  __( 'This color is for title and content above image', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-main-link-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-main-link-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Link Color', 'charitize' ),
            'description'           =>  __( 'will effect all the link color', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );


$charitize_settings_controls['charitize-color-reset'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-color-reset'],
            'transport'            => 'postmessage',
        ),
        'control' => array(
            'label'                 =>  __( 'Reset', 'charitize' ),
            'description'           =>  __( 'Caution: Reset all above color settings to default. Refresh the page after save to view the effects. ', 'charitize' ),
            'section'               => 'charitize-colors-reset',
            'type'                  => 'checkbox',
            'priority'              => 220,
            'active_callback'       => ''
        )
    );