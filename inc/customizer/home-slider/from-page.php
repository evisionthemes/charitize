<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-featured-slider-pages'] = 0;

/*page selection*/
$charitize_sections['charitize-feature-slider-pages'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Select From Page', 'charitize' ),
        'description'    => __( 'This option only work when you have selected "Page" in "Settings Options".', 'charitize' ),
        'panel'          => 'charitize-feature-slider',
    );

/*creating setting control for charitize-feature-slider-page start*/
$charitize_repeated_settings_controls['charitize-featured-slider-pages'] =
    array(
        'repeated' => 3,
        'charitize-feature-slider-pages-ids' => array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-featured-slider-pages'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Slide %s', 'charitize' ),
                'section'               => 'charitize-feature-slider-pages',
                'type'                  => 'dropdown-pages',
                'priority'              => 60,
                'description'           => ''
            )
        ),
        'charitize-feature-slider-pages-divider' => array(
            'control' => array(
                'section'               => 'charitize-feature-slider-pages',
                'type'                  => 'message',
                'priority'              => 60,
                'description'           => '<br /><hr />'
            )
        )
    );

