<?php

if( ! function_exists( 'charitize_wp_head' ) ) :

    /**
     * charitize wp_head hook
     *
     * @since  charitize 1.0.0
     */
    function charitize_wp_head(){
      
        global $charitize_customizer_all_values;
        global $charitize_google_fonts;

        $charitize_main_link_color_option = $charitize_customizer_all_values['charitize-main-link-color'];
        $charitize_banner_text_color = $charitize_customizer_all_values['charitize-banner-text-color'];
        $charitize_site_identity_color_option = $charitize_customizer_all_values['charitize-site-identity-color'];
        /*font settings*/
        $charitize_font_family_site_identity_option = $charitize_google_fonts[$charitize_customizer_all_values['charitize-font-family-site-identity']];
        $charitize_font_family_title_option = $charitize_google_fonts[$charitize_customizer_all_values['charitize-font-family-title']];
        /*Banner Image*/
        $charitize_banner_image = $charitize_customizer_all_values['charitize-default-banner-image'];
        ?>
        <style type="text/css">
        /*=====COLOR OPTION=====*/

        /*Color*/
        /*----------------------------------*/

        /*Primary color option*/
        <?php
        if( !empty($charitize_main_link_color_option) ){
        ?>
          /*Link color option*/
          .contact-widget ul li a,
          .contact-widget ul li a i,
          .posted-on a,
          .cat-links a,
          .tags-links a,
          .author a,
          .comments-link a,
          .edit-link a,
          .nav-links .nav-previous a,
          .nav-links .nav-next a,
          .search-form .search-submit,
          .widget li a,

          .contact-widget ul li a:active,
          .contact-widget ul li a:active i,
          .posted-on a:active,
          .cat-links a:active,
          .tags-links a:active,
          .author a:active,
          .comments-link a:active,
          .edit-link a:active,
          .nav-links .nav-previous a:active,
          .nav-links .nav-next a:active,
          .search-form .search-submit:active,
          .widget li a:active{
                color: <?php echo esc_attr( $charitize_main_link_color_option );?>;/*#332e2b*/

          }

        <?php
        }

        /*Banner text color*/
        if( !empty($charitize_banner_text_color) ){
        ?>  
        .wrapper-slider .slide-item .slider-title a,
        .wrapper-slider .slide-item,
        .page-inner-title .taxonomy-description,
        .page-inner-title .entry-header .entry-title,
        .page-inner-title,
        .page-inner-title .page-title,
        .main-navigation ul ul a,
        .main-navigation ul ul a:visited {
           color: <?php echo esc_attr( $charitize_banner_text_color );?>;/*#fff*/
        }
        @media screen and (max-width: 1199px){
        .main-navigation ul li a,
        .main-navigation ul li a:visited {
            color: <?php echo esc_attr( $charitize_banner_text_color );?>;/*#fff*/
            }
        }
        <?php
        }

        /*Site identity color */
        if( !empty($charitize_site_identity_color_option) ){
        ?>
            .site-header .site-title a,
            .site-header .site-description{
                color: <?php echo esc_attr( $charitize_site_identity_color_option );?>; /*#332e2b*/
           }

        <?php
        }
        /*end of color options*/

        /*=====FONT FAMILY OPTION=====*/
        /*----------------------------------*/
        /*Site identity font*/
        if( !empty($charitize_font_family_site_identity_option) ){
        ?> 
          .site-header .site-title a,
          .site-header .site-description {
                font-family: "<?php echo esc_attr( $charitize_font_family_site_identity_option ); ?>";/*"Lato"*/
            }
        <?php
        } 

        /*Title font*/
        if( !empty($charitize_font_family_title_option) ){
        ?> 
            h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
                font-family: "<?php echo esc_attr( $charitize_font_family_title_option ); ?>";/*"Lato"*/
            }
        <?php
        } 
        /* Banner Image*/
        if( !empty( $charitize_banner_image ) ){
        ?>
            .page-inner-title{
                background-image: url(<?php echo esc_url($charitize_banner_image);?>);
                }
        <?php
        }
        // Bail if not WP 4.7.
        $charitize_loop_number = 1;
        if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
          $charitize_custom_css = $charitize_customizer_all_values['charitize-custom-css']; 
          $charitize_custom_css_output = ''; 
          if ( ! empty( $charitize_custom_css ) ) { 
              $charitize_custom_css_output .= esc_textarea( $charitize_custom_css ) ; 
          } 
         echo $charitize_custom_css_output;/*escaping done above*/ 
        } else{
            $charitize_customizer_saved_values = charitize_get_all_options();
            $charitize_custom_css = $charitize_customizer_all_values['charitize-custom-css'];
            // Bail if there is no Custom CSS.
                if (!empty($charitize_custom_css)) {
                    $core_css = wp_get_custom_css();
                    $return = wp_update_custom_css_post( $core_css . $charitize_custom_css );
                    if ( ! is_wp_error( $return ) ) {
                    // Remove from theme.
                    $options = esc_textarea($charitize_customizer_all_values['charitize-custom-css']);
                    echo $options;
                    }
                }
            $charitize_custom_css = '';
            $charitize_customizer_saved_values['charitize-custom-css'] = $charitize_customizer_defaults['charitize-custom-css'];
            /*resetting fields*/
            charitize_reset_options( $charitize_customizer_saved_values );
        }
        ?>
        
        </style>
    <?php
    }
endif;
add_action( 'wp_head', 'charitize_wp_head' );