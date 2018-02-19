<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-default-banner-image'] = get_template_directory_uri().'/assets/img/callup-banner.png';
$charitize_customizer_defaults['charitize-enable-static-page'] = 0;
$charitize_customizer_defaults['charitize-default-layout'] = 'right-sidebar';
$charitize_customizer_defaults['charitize-archive-layout'] = 'thumbnail-and-excerpt';
$charitize_customizer_defaults['charitize-archive-image-align'] = 'full';
$charitize_customizer_defaults['charitize-number-of-archive-words'] = 30;
$charitize_customizer_defaults['charitize-single-post-image-align'] = 'full';



$charitize_sections['charitize-layout-options'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Layout Options', 'charitize' ),
        'panel'          => 'charitize-theme-options',
    );

// static front page enable option
$charitize_settings_controls['charitize-enable-static-page'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-enable-static-page'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Static Front Page', 'charitize' ),
            'description'           =>  __( 'If you disable this the static page will be disappera form the home page and other section from customizer will reamin as it is','charitize' ),
            'section'               => 'charitize-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );


$charitize_settings_controls['charitize-default-banner-image'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-default-banner-image'],
        ),
        'control' => array(
            'label'                 =>  __( 'Default Banner Image', 'charitize' ),
            'description'           =>  __( 'Please note that if you remove this image default banner image will appear', 'charitize' ),
            'section'               => 'charitize-layout-options',
            'type'                  => 'image',
            'priority'              => 10,
        )
    );

/*layout-options option responsive lodader start*/
$charitize_settings_controls['charitize-default-layout'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-default-layout'],
        ),
        'control' => array(
            'label'                 =>  __( 'Default Layout', 'charitize' ),
            'description'           =>  __( 'Layout for all archives, single posts and pages', 'charitize' ),
            'section'               => 'charitize-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'right-sidebar' => __( 'Content - Primary Sidebar', 'charitize' ),
                'left-sidebar' => __( 'Primary Sidebar - Content', 'charitize' ),
                'no-sidebar' => __( 'No Sidebar', 'charitize' )
            ),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-number-of-archive-words'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-number-of-archive-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Words For Excerpt', 'charitize' ),
            'description'           =>  __( 'This will controll the excerpt length on listing page', 'charitize' ),
            'section'               => 'charitize-layout-options',
            'type'                  => 'number',
            'priority'              => 40,
            'input_attrs' => array( 'min' => 1, 'max' => 2000),
            'active_callback'       => ''
        )
    );


$charitize_settings_controls['charitize-single-post-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-single-post-image-align'],
        ),
        'control' => array(
            'label'                 =>  __( 'Alignment Of Image In Single Post/Page', 'charitize' ),
            'section'               => 'charitize-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'full' => __( 'Full', 'charitize' ),
                'right' => __( 'Right', 'charitize' ),
                'left' => __( 'Left', 'charitize' ),
                'no-image' => __( 'No image', 'charitize' )
            ),
            'priority'              => 50,
            'description'           =>  __( 'Please note that this setting can be override form individual post/page', 'charitize' ),
        )
    );