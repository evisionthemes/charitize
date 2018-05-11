<?php
/**
 * evision themes Theme Customizer
 *
 * @package eVision themes
 * @subpackage Charitize
 * @since Charitize 1.0.0
 */
/*Define Url for including css and js*/
if ( !defined( 'EVISION_CUSTOMIZER_URL' ) ) {
    define( 'EVISION_CUSTOMIZER_URL', trailingslashit( get_template_directory_uri() ) . 'inc/frameworks/evision-customizer/' );
}
/*Define path for including php files*/
if ( !defined( 'EVISION_CUSTOMIZER_PATH' ) ) {
    define( 'EVISION_CUSTOMIZER_PATH', trailingslashit( get_template_directory() ) . 'inc/frameworks/evision-customizer/' );
}

/*define constant for evision customizer name*/
if(!defined('EVISION_CUSTOMIZER_NAME')){
    define( 'EVISION_CUSTOMIZER_NAME', 'charitize_options' );
}


/**
 * reset options
 * @param  array $reset_options
 * @return void
 *
 * @since charitize 1.0
 */

if ( ! function_exists( 'charitize_reset_options' ) ) :
    function charitize_reset_options( $reset_options ) {
        set_theme_mod( EVISION_CUSTOMIZER_NAME, $reset_options );
    }
endif;
/**
 * Customizer framework added.
 */
// require get_template_directory() . '/inc/frameworks/evision-customizer/evision-customizer.php';
$Charitize_frameworks_path = charitize_file_directory('inc/frameworks/evision-customizer/evision-customizer.php');
require $Charitize_frameworks_path;

global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/******************************************
Modify Site Identity sections
 *******************************************/
// require get_template_directory().'/inc/customizer/site-identity/site-identity.php';
$Charitize_site_identity_path = charitize_file_directory('inc/customizer/site-identity/site-identity.php');
require $Charitize_site_identity_path;

/******************************************
Modify Site Color sections
 *******************************************/
// require get_template_directory() . '/inc/customizer/colors/general.php';
$Charitize_colors_path = charitize_file_directory('inc/customizer/colors/general.php');
require $Charitize_colors_path;

/******************************************
Modify Site Font sections
 *******************************************/
// require get_template_directory() . '/inc/customizer/fonts/font-family.php';
$Charitize_fonts_path = charitize_file_directory('inc/customizer/fonts/font-family.php');
require $Charitize_fonts_path;

/******************************************
Modify Site Slider sections
 *******************************************/
// require get_template_directory() . '/inc/customizer/home-slider/panel.php';
$Charitize_home_slider_path = charitize_file_directory('inc/customizer/home-slider/panel.php');
require $Charitize_home_slider_path;

/******************************************
Modify Site Activities sections
 *******************************************/
// require get_template_directory() . '/inc/customizer/home-activities/panel.php';
$Charitize_home_activities_path = charitize_file_directory('inc/customizer/home-activities/panel.php');
require $Charitize_home_activities_path;

/******************************************
Modify Site Donate sections
 *******************************************/
// require get_template_directory() . '/inc/customizer/home-donate/panel.php';
$Charitize_home_donate = charitize_file_directory('inc/customizer/home-donate/panel.php');
require $Charitize_home_donate;

/******************************************
Modify Site Theme Options sections
 *******************************************/
// require get_template_directory() . '/inc/customizer/theme-options/panel.php';
$Charitize_theme_options_path = charitize_file_directory('inc/customizer/theme-options/panel.php');
require $Charitize_theme_options_path;


/*Resetting all Values*/
/**
 * Reset color settings to default
 * @param  $input
 *
 * @since charitize 1.0
 */

global $charitize_customizer_defaults;
$charitize_customizer_defaults['charitize-customizer-reset'] = '';
if ( ! function_exists( 'charitize_customizer_reset' ) ) :
    function charitize_customizer_reset( ) {
        global $charitize_customizer_saved_values;
        $charitize_customizer_saved_values = charitize_get_all_options();
        if ( $charitize_customizer_saved_values['charitize-customizer-reset'] == 1 ) {
            global $charitize_customizer_defaults;

            $charitize_customizer_defaults['charitize-customizer-reset'] = '';
            /*resetting fields*/
            charitize_reset_options( $charitize_customizer_defaults );
        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','charitize_customizer_reset' );



$charitize_sections['charitize-customizer-reset'] =
    array(
        'priority'       => 999,
        'title'          => __( 'Reset All Options', 'charitize' )
    );
$charitize_settings_controls['charitize-customizer-reset'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-customizer-reset'],
            'sanitize_callback'    => 'charitize_customizer_reset',
            'transport'            => 'postmessage',
        ),
        'control' => array(
            'label'                 =>  __( 'Reset All Options', 'charitize' ),
            'description'           =>  __( 'Caution: Reset all options settings to default. Refresh the page after save to view the effects. ', 'charitize' ),
            'section'               => 'charitize-customizer-reset',
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/******************************************
Removing / Arranging section setting control
 *******************************************/

$charitize_sections['custom_css'] =
    array(
        'title'          => __( 'Additional CSS', 'charitize' ),
        'priority'       => 400,
    );

$charitize_remove_sections =
    array(
        'header_image'
    );
$charitize_remove_settings_controls =
    array(
        'header_textcolor','display_header_text'
    );
$charitize_customizer_args = array(
    'panels'            => $charitize_panels, /*always use key panels */
    'sections'          => $charitize_sections,/*always use key sections*/
    'settings_controls' => $charitize_settings_controls,/*always use key settings_controls*/
    'repeated_settings_controls' => $charitize_repeated_settings_controls,/*always use key sections*/
    'remove_sections'   => $charitize_remove_sections,/*always use key remove_sections*/
    'remove_settings_controls' => $charitize_remove_settings_controls/*always use key remove_settings_controls*/
);

/*registering panel section setting and control start*/
function charitize_add_panels_sections_settings() {
    global $charitize_customizer_args;
    return $charitize_customizer_args;
}
add_filter( 'evision_customizer_panels_sections_settings', 'charitize_add_panels_sections_settings' );
/*registering panel section setting and control end*/

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function charitize_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'charitize_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function charitize_customize_preview_js() {
    wp_enqueue_script( 'charitize_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'charitize_customize_preview_js' );


/**
 * get all saved options
 * @param  null
 * @return array saved options
 *
 * @since charitize 1.0
 */
if ( ! function_exists( 'charitize_get_all_options' ) ) :
    function charitize_get_all_options( $merge_default = 0 ) {
        $charitize_customizer_saved_values = evision_customizer_get_all_values( EVISION_CUSTOMIZER_NAME );
        if( 1 == $merge_default ){
            global $charitize_customizer_defaults;
            if(is_array( $charitize_customizer_saved_values )){
                $charitize_customizer_saved_values = array_merge($charitize_customizer_defaults, $charitize_customizer_saved_values );
            }
            else{
                $charitize_customizer_saved_values = $charitize_customizer_defaults;
            }
        }
        return $charitize_customizer_saved_values;
    }
endif;