<?php

global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;
global $wp_version;

if (version_compare($wp_version, '4.5', '<')) {
    /*defaults values*/
    $charitize_customizer_defaults['charitize-logo'] = '';
    $charitize_customizer_defaults['charitize-title-tagline-message'] = sprintf( __( '%$1s If you do not have a logo %$2s', 'charitize' ), '<span class="customize-control-title">','</span>' );
    $charitize_customizer_defaults['charitize-enable-title'] = 1;
    $charitize_customizer_defaults['charitize-enable-tagline'] = 1;

    /*creating setting control*/
    $charitize_settings_controls['charitize-logo'] =
        array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-logo'],
            ),
            'control' => array(
                'label'                 =>  __( 'Logo', 'charitize' ),
                'section'               => 'title_tagline',
                'type'                  => 'image',
                'priority'              => 70,
                'description'           =>  __( 'Recommended logo size 165*50', 'charitize' ),
                'active_callback'       => ''
            )
        );

    /*enable option for enable tagline in header*/
    $charitize_settings_controls['charitize-title-tagline-message'] =
        array(
            'control' => array(
                'description'           =>  $charitize_customizer_defaults['charitize-title-tagline-message'],
                'section'               => 'title_tagline',
                'type'                  => 'message',
                'priority'              => 75,
                'active_callback'       => ''
            )
        );
    /*enable option for enable tagline in header*/
    $charitize_settings_controls['charitize-enable-title'] =
        array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-enable-title'],
            ),
            'control' => array(
                'label'                 =>  __( 'Enable Title', 'charitize' ),
                'section'               => 'title_tagline',
                'type'                  => 'checkbox',
                'priority'              => 80,
                'active_callback'       => ''
            )
        );
    $charitize_settings_controls['charitize-enable-tagline'] =
        array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-enable-tagline'],
            ),
            'control' => array(
                'label'                 =>  __( 'Enable Tagline', 'charitize' ),
                'section'               => 'title_tagline',
                'type'                  => 'checkbox',
                'priority'              => 90,
                'active_callback'       => ''
            )
        );
}
