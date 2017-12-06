<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-activities-pages'] = 0;

/*page selection*/
$charitize_sections['charitize-activities-pages'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Select activities Form Page', 'charitize' ),
        'description'    => __( 'This option only work when you have selected "Page" in "Select Activities Section From" ', 'charitize' ),
        'panel'          => 'charitize-activities-section',
    );

/*creating setting control for charitize-activities-page start*/
$charitize_repeated_settings_controls['charitize-activities-pages'] =
    array(
        'repeated' => 4,
        'charitize-activities-pages-ids' => array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-activities-pages'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Slide %s', 'charitize' ),
                'section'               => 'charitize-activities-pages',
                'type'                  => 'dropdown-pages',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'charitize-activities-pages-divider' => array(
            'control' => array(
                'section'               => 'charitize-activities-pages',
                'type'                  => 'message',
                'priority'              => 20,
                'description'           => '<br /><hr />'
            )
        )
    );