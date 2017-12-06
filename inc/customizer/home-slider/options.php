<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values feature trip options*/
$charitize_customizer_defaults['charitize-feature-slider-enable'] = 0;
$charitize_customizer_defaults['charitize-feature-slider-number'] = 3;
$charitize_customizer_defaults['charitize-feature-slider-selection'] = 'from-page';

/*feature slider enable setting*/
$charitize_sections['charitize-feature-section-options'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Setting Options', 'charitize' ),
        'panel'          => 'charitize-feature-slider',
    );

/*Feature section enable control*/
$charitize_settings_controls['charitize-feature-slider-enable'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-feature-slider-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Feature Slider', 'charitize' ),
            'section'               => 'charitize-feature-section-options',
        	'description'    		=> __( 'Enable "Feature slider" on checked' , 'charitize' ),
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/*No of feature slider selection*/
$charitize_settings_controls['charitize-feature-slider-number'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-feature-slider-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Slider', 'charitize' ),
            'section'               => 'charitize-feature-section-options',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'charitize' ),
                2 => __( '2', 'charitize' ),
                3 => __( '3', 'charitize' )
            ),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

