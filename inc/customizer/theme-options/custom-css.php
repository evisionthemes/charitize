<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-custom-css'] = '';
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
    $charitize_sections['charitize-custom-css'] =
        array(
            'priority'       => 120,
            'title'          => __( 'Custom CSS', 'charitize' ),
            'panel'          => 'charitize-theme-options'
        );

    $charitize_settings_controls['charitize-custom-css'] =
        array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-custom-css'],
            ),
            'control' => array(
                'label'                 =>  __( 'Custom CSS', 'charitize' ),
                'section'               => 'charitize-custom-css',
                'type'                  => 'textarea_css',
                'priority'              => 40,
            )
        );
}