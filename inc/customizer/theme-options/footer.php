<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-enable-breadcrumb'] = 1;
$charitize_customizer_defaults['charitize-enable-back-to-top'] = 1;
$charitize_customizer_defaults['charitize-enable-pre-loader'] = 1;

$charitize_customizer_defaults['charitize-footer-sidebar-number'] = 3;
$charitize_customizer_defaults['charitize-copyright-text'] = __('Copyright &copy; All right reserved.','charitize');
$charitize_customizer_defaults['charitize-enable-theme-name'] = 1;

$charitize_sections['charitize-footer-options'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Footer Options', 'charitize' ),
        'panel'          => 'charitize-theme-options'
    );


    $charitize_settings_controls['charitize-footer-sidebar-number'] =
        array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-footer-sidebar-number'],
            ),
            'control' => array(
                'label'                 =>  __( 'Number of Sidebars In Footer Area', 'charitize' ),
                'section'               => 'charitize-footer-options',
                'type'                  => 'select',
                'choices'               => array(
                    0 => __( 'Disable footer sidebar area', 'charitize' ),
                    1 => __( '1', 'charitize' ),
                    2 => __( '2', 'charitize' ),
                    3 => __( '3', 'charitize' )
                ),
                'priority'              => 10,
                'description'           => '',
                'active_callback'       => ''
            )
        );


$charitize_settings_controls['charitize-copyright-text'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-copyright-text'],
        ),
        'control' => array(
            'label'                 =>  __( 'Copyright Text', 'charitize' ),
            'section'               => 'charitize-footer-options',
            'type'                  => 'text_html',
            'priority'              => 20,
        )
    );