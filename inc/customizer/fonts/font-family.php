<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*creating panel for fonts-setting*/
$charitize_panels['charitize-fonts'] =
    array(
        'title'          => __( 'Font Setting', 'charitize' ),
        'priority'       => 43
    );

/*font array*/
global $charitize_google_fonts;
$charitize_google_fonts = array(
    'Archivo+Narrow:400,400italic,700' => 'Archivo Narrow',
    'Bitter:400,400italic,700' => 'Bitter',
    'Cookie' => 'Cookie',
    'Exo:400,300,400italic,600,800' => 'Exo',
    'Kreon:400,300,700' => 'Kreon',
    'Lato:400,300,400italic,900,700' => 'Lato',
    'News+Cycle:400,700' => 'News Cycle',
    'Oxygen:400,300,700' => 'Oxygen',
    'Playball' => 'Playball',
    'Ropa+Sans:400,400italic' => 'Ropa Sans',
    'Squada+One' => 'Squada One',
    'Tangerine:400,700' => 'Tangerine',
    'Ubuntu:400,400italic,500,700' => 'Ubuntu',
    'Varela+Round' => 'Varela Round',
    'Yanone+Kaffeesatz:400,300,700' => 'Yanone Kaffeesatz',
);

/*defaults values*/
$charitize_customizer_defaults['charitize-font-family-site-identity'] = 'Lato:400,300,400italic,900,700';
$charitize_customizer_defaults['charitize-font-family-title'] = 'Lato:400,300,400italic,900,700';


/*section*/
$charitize_sections['charitize-family'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Font Family', 'charitize' ),
        'panel'          => 'charitize-fonts',
    );

/*setting - controls*/
$charitize_settings_controls['charitize-font-family-site-identity'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-font-family-site-identity'],
            
        ),
        'control' => array(
            'label'                 => __( 'Site Identity/Logo', 'charitize' ),
            'description'           => __( 'Site Identity font family', 'charitize' ),
            'section'               => 'charitize-family',
            'type'                  => 'select',
            'choices'               => $charitize_google_fonts,
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-font-family-title'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-font-family-title'],
            
        ),
        'control' => array(
            'label'                 => __( 'H1-H6 Font Family)', 'charitize' ),
            'section'               => 'charitize-family',
            'type'                  => 'select',
            'choices'               => $charitize_google_fonts,
            'priority'              => 15,
            'active_callback'       => ''
        )
    );