<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-donate-link'] = home_url( '#' );
$charitize_customizer_defaults['charitize-donate-button-text'] = __('Donate Now','charitize');
$charitize_customizer_defaults['charitize-enable-social-all-page'] = 0;


$charitize_sections['charitize-header-options'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Header Options', 'charitize' ),
        'panel'          => 'charitize-theme-options'
    );

/*Button Link Url*/
$charitize_settings_controls['charitize-donate-link'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-donate-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Header Button URL', 'charitize' ),
            'section'               => 'charitize-header-options',
            'type'                  => 'url',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
