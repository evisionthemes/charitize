<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-fs-single-words'] = 30;
$charitize_customizer_defaults['charitize-fs-slider-mode'] = 'fadeout';
$charitize_customizer_defaults['charitize-fs-slider-time'] = 2;
$charitize_customizer_defaults['charitize-fs-slider-pause-time'] = 7;
$charitize_customizer_defaults['charitize-fs-enable-arrow'] = 0;
$charitize_customizer_defaults['charitize-fs-enable-pager'] = 1;
$charitize_customizer_defaults['charitize-fs-enable-autoplay'] = 1;
$charitize_customizer_defaults['charitize-fs-enable-title'] = 1;
$charitize_customizer_defaults['charitize-fs-enable-caption'] = 1;
$charitize_customizer_defaults['charitize-fs-enable-button-text'] = __('LEARN MORE','charitize');

/*fs options*/
$charitize_sections['charitize-fs-slider-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Slider Property', 'charitize' ),
        'panel'          => 'charitize-feature-slider',
    );

$charitize_settings_controls['charitize-fs-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-fs-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Single Slider- Number Of Words', 'charitize' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'charitize' ),
            'section'               => 'charitize-fs-slider-options',
            'type'                  => 'number',
            'priority'              => 5,
            'active_callback'       => '',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
        )
    );

$charitize_settings_controls['charitize-fs-slider-mode'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-fs-slider-mode']
        ),
        'control' => array(
            'label'                 =>  __( 'Slider Mode', 'charitize' ),
            'section'               => 'charitize-fs-slider-options',
            'type'                  => 'select',
            'choices'               => array(
                'scrollHorz' => __( 'Default', 'charitize' ),
                'fade' => __( 'Fade', 'charitize' ),
                'fadeout' => __( 'Fade-Out', 'charitize' )
            ),
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-fs-enable-arrow'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-fs-enable-arrow']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Arrow', 'charitize' ),
            'section'               => 'charitize-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-fs-enable-pager'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-fs-enable-pager']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Pager', 'charitize' ),
            'section'               => 'charitize-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 55,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-fs-enable-autoplay'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-fs-enable-autoplay']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Autoplay', 'charitize' ),
            'section'               => 'charitize-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );