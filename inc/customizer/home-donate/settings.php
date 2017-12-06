<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values donate options*/
$charitize_customizer_defaults['charitize-home-donate-single-words'] = 40;
$charitize_customizer_defaults['charitize-home-donate-button-text'] = __('Donate Now','charitize');
$charitize_customizer_defaults['charitize-home-donate-button-link'] = '';

/* Feature section Enable settings*/
$charitize_sections['charitize-donate-section-settings'] =
    array(
        'priority'       => 30,
        'title'          => __( 'Section Settings', 'charitize' ),
        'panel'          => 'charitize-donate-panel',
    );


/*String in max to be appear as description on donate*/
$charitize_settings_controls['charitize-home-donate-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-home-donate-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Words', 'charitize' ),
            'description'           =>  __( 'Give number of words you wish to be appear on home page donate section', 'charitize' ),
            'section'               => 'charitize-donate-section-settings',
            'type'                  => 'number',
            'priority'              => 20,
            'active_callback'       => '',
            'input_attrs' => array( 'min' => 1, 'max' => 200),

        )
    );

/*Donate button url*/
$charitize_settings_controls['charitize-home-donate-button-link'] =
array(
    'setting' =>     array(
        'default'              => $charitize_customizer_defaults['charitize-home-donate-button-link']
    ),
    'control' => array(
        'label'                 =>  __( 'Donate Section Button URL', 'charitize' ),
        'description'           =>  __( 'Will redirect to the costume URL ', 'charitize' ),
        'section'               => 'charitize-donate-section-settings',
        'type'                  => 'url',
        'priority'              => 70,
        'active_callback'       => ''
    )
);
