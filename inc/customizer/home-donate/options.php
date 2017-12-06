<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values donate options*/
$charitize_customizer_defaults['charitize-donate-enable'] = 0;
$charitize_customizer_defaults['charitize-donate-page'] = 0;

/* Feature section Enable settings*/
$charitize_sections['charitize-donate-options'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Section Options', 'charitize' ),
        'panel'          => 'charitize-donate-panel',
    );

/*Donate section enable control*/
$charitize_settings_controls['charitize-donate-enable'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-donate-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Donate Section', 'charitize' ),
            'description'           =>  __( 'Enable "Donate Section" on checked', 'charitize' ),
            'section'               => 'charitize-donate-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );


    /*creating setting control for charitize-donate-page start*/
    $charitize_settings_controls['charitize-donate-page'] =
        array(
                'setting' =>     array(
                    'default'              => $charitize_customizer_defaults['charitize-donate-page'],
                    ),
                'control' => array(
                    'label'                 =>  __( 'Select Page For Donate Section', 'charitize' ),
                    'description'           => '',
                    'section'               => 'charitize-donate-options',
                    'type'                  => 'dropdown-pages',
                    'priority'              => 20
                )
        );
