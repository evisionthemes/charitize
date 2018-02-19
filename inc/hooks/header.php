<?php
if ( ! function_exists( 'charitize_set_global' ) ) :
    /**
     * Setting global values for all saved customizer values
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_set_global() {
        /*Getting saved values start*/
        $GLOBALS['charitize_customizer_all_values'] = charitize_get_all_options(1);
    }
    endif;
add_action( 'charitize_action_before_head', 'charitize_set_global', 0 );

if ( ! function_exists( 'charitize_doctype' ) ) :
    /**
     * Doctype Declaration
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_doctype() {
        ?>
        <!DOCTYPE html><html <?php language_attributes(); ?>>
    <?php
    }
endif;
add_action( 'charitize_action_before_head', 'charitize_doctype', 10 );

if ( ! function_exists( 'charitize_before_wp_head' ) ) :
    /**
     * Before wp head codes
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_before_wp_head() {
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
}
endif;
add_action( 'charitize_action_before_wp_head', 'charitize_before_wp_head', 10 );

if( ! function_exists( 'charitize_default_layout' ) ) :
    /**
     * charitize default layout function
     *
     * @since  charitize 1.0.0
     *
     * @param int
     * @return string
     */
    function charitize_default_layout(){
        global $charitize_customizer_all_values,$post;
        $charitize_default_layout = $charitize_customizer_all_values['charitize-default-layout'];
        return $charitize_default_layout;
    }
endif;

    if ( ! function_exists( 'charitize_body_class' ) ) :
    /**
     * add body class
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_body_class( $charitize_body_classes ) {
        if(!is_front_page()){
            $charitize_default_layout = charitize_default_layout();
            if( !empty( $charitize_default_layout ) ){
                if( 'left-sidebar' == $charitize_default_layout ){
                    $charitize_body_classes[] = 'evision-left-sidebar';
                }
                elseif( 'right-sidebar' == $charitize_default_layout ){
                    $charitize_body_classes[] = 'evision-right-sidebar';
                }
                elseif( 'no-sidebar' == $charitize_default_layout ){
                    $charitize_body_classes[] = 'evision-no-sidebar';
                }
                else{
                    $charitize_body_classes[] = 'evision-right-sidebar';
                }
            }
            else{
                $charitize_body_classes[] = 'charitize-right-sidebar';
            }
        }
        return $charitize_body_classes;

    }
endif;
add_action( 'body_class', 'charitize_body_class', 10, 1);

/*charitize_action_after_body*/

if ( ! function_exists( 'charitize_page_start' ) ) :
    /**
     * page start
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_page_start() {
    ?>
        <div id="page" class="hfeed site">
    <?php
    }
endif;
add_action( 'charitize_action_before', 'charitize_page_start', 15 );

/*charitize_action_after_body*/

if ( ! function_exists( 'charitize_social_menu' ) ) :
    /**
     * page start
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_social_menu() {
        global $charitize_customizer_all_values;
    ?>

        <?php if (1 == $charitize_customizer_all_values['charitize-enable-social-all-page']) { ?>
            <div class="social-widget evision-social-section social-icon-only">
                <?php
                    wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span>',
                        'link_after'=>'</span>' , 'menu_id' => 'primary-menu','fallback_cb' => false, ) );
                ?>
            </div>
        <?php
        }
        else{
            if (is_front_page() || is_home()) { ?>
                <div class="social-widget evision-social-section social-icon-only">
                    <?php
                        wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span>',
                            'link_after'=>'</span>' , 'menu_id' => 'primary-menu','fallback_cb' => false, ) );
                    ?>
                </div>
        <?php }
        }

    }
endif;
add_action( 'charitize_action_after_page_id', 'charitize_social_menu', 15 );


// loader


?>
<?php
if ( ! function_exists( 'charitize_pre_loader' ) ) :
    /**
     * Pre Loader to content
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_pre_loader() {
        global $charitize_customizer_all_values;

        if ( 1 == $charitize_customizer_all_values['charitize-enable-pre-loader']) { ?>
            <section id="wraploader" class="wraploader">
            <div id="loader" class="loader-outer">
              <svg id="wrapcircle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="71.333px" height="12.667px" viewBox="0 0 71.333 12.667" enable-background="new 0 0 71.333 12.667" xml:space="preserve">
              <circle fill="#FFFFFF" cx="5" cy="6.727" r="5" id="firstcircle"></circle>
              <circle fill="#FFFFFF" cx="20" cy="6.487" r="5" id="secondcircle"></circle>
              <circle fill="#FFFFFF" cx="35" cy="6.487" r="5" id="thirthcircle"></circle>
              <circle fill="#FFFFFF" cx="50" cy="6.487" r="5" id="forthcircle"></circle>
              <circle fill="#FFFFFF" cx="65" cy="6.487" r="5" id="fifthcircle"></circle>
              </svg>
            </div>
            </section>
        <?php }
    }
endif;
add_action( 'charitize_action_pre_loader_header', 'charitize_pre_loader', 10 );

if ( ! function_exists( 'charitize_skip_to_content' ) ) :
    /**
     * Skip to content
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_skip_to_content() {
        ?>
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'charitize' ); ?></a>
    <?php
    }
endif;
add_action( 'charitize_action_before_header', 'charitize_skip_to_content', 10 );

if ( ! function_exists( 'charitize_header' ) ) :
    /**
     * Main header
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_header() {
        global $charitize_customizer_all_values;
        global $wp_version;
        ?>
            <div class="wrapper header-wrapper">
                <header id="masthead" class="site-header" role="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="site-branding">
                                    <?php if (version_compare($wp_version, '4.5', '<')) {
                                        if ( isset($charitize_customizer_all_values['charitize-logo']) && !empty($charitize_customizer_all_values['charitize-logo'])) :
                                            echo '<div class="site-title">';?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <img class="header-logo" src="<?php echo esc_url($charitize_customizer_all_values['charitize-logo']); ?>" alt="<?php bloginfo( 'name' );?>">
                                            </a>
                                            <?php echo '</div>';?>
                                        <?php else :
                                            echo '<div class="site-title">';?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <?php if ( 1 == $charitize_customizer_all_values['charitize-enable-title'] ) :
                                                    bloginfo( 'name' );
                                                endif;?>
                                            </a>
                                            <?php if ( 1 == $charitize_customizer_all_values['charitize-enable-tagline'] ) :
                                                echo '<p class="site-description">'. esc_html (get_bloginfo('description' )).'</p>';
                                            endif; ?>
                                            <?php echo '</div>';
                                        endif;
                                    } else {
                                        charitize_the_custom_logo();
                                        if ( is_front_page() && is_home() ) : ?>
                                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                        <?php else : ?>
                                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                        <?php endif;
                                        $description = get_bloginfo( 'description', 'display' );
                                        if ( $description || is_customize_preview() ) : ?>
                                            <h2 class="site-description"><?php echo esc_html($description ); ?></h2>
                                        <?php endif;
                                    }?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div class="row">
                                    <div class="nav-holder">
                                        <div class="col-xs-9 mb-device go-left">
                                            <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="fa fa-bars"></span><?php __('MENU','charitize') ?></button>
                                            <div id="site-header-menu" class="site-header-menu">
                                                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'charitize' ); ?>">
                                                    <?php
                                                        wp_nav_menu( array(
                                                            'theme_location' => 'primary',
                                                            'menu_id'        => 'primary-menu',
                                                            'menu_class'     => 'primary-menu',
                                                        ) );
                                                    ?>
                                                </nav><!-- #site-navigation -->
                                            </div><!-- site-header-menu -->
                                        </div>
                                         <div class="col-xs-3 mb-device go-right">
                                                <span class="header-btn">
                                                    <a href="<?php echo esc_url($charitize_customizer_all_values['charitize-donate-link'] );?>" class="button"><?php echo esc_html($charitize_customizer_all_values['charitize-donate-button-text'] );?></a>
                                                </span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <header id="fixedhead" class="site-header" role="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="site-branding">
                                    <?php if (version_compare($wp_version, '4.5', '<')) {
                                        if ( isset($charitize_customizer_all_values['charitize-logo']) && !empty($charitize_customizer_all_values['charitize-logo'])) :
                                            echo '<div class="site-title">';?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <img class="header-logo" src="<?php echo esc_url($charitize_customizer_all_values['charitize-logo']); ?>" alt="<?php bloginfo( 'name' );?>">
                                            </a>
                                            <?php echo '</div>';?>
                                        <?php else :
                                            echo '<div class="site-title">';?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <?php if ( 1 == $charitize_customizer_all_values['charitize-enable-title'] ) :
                                                    bloginfo( 'name' );
                                                endif;?>
                                            </a>
                                            <?php echo '</div>';
                                        endif;
                                    } else {
                                        charitize_the_custom_logo();
                                        if ( is_front_page() && is_home() ) : ?>
                                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                        <?php else : ?>
                                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                        <?php endif;
                                    }?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <div class="row">
                                    <div class="nav-holder">
                                        <div class="col-xs-9 mb-device go-left">
                                            <button id="menu-toggle-fixed" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="fa fa-bars"></span><?php __('MENU','charitize') ?></button>
                                            <div id="site-header-menu-fixed" class="site-header-menu">
                                                <nav id="site-navigation-fixed" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'charitize' ); ?>">
                                                    <?php
                                                        wp_nav_menu( array(
                                                            'theme_location' => 'primary',
                                                            'menu_id'        => 'primary-menu',
                                                            'menu_class'     => 'primary-menu',
                                                        ) );
                                                    ?>
                                                </nav><!-- #site-navigation -->
                                            </div><!-- site-header-menu -->
                                        </div>
                                        <div class="col-xs-3 mb-device go-right">
                                            <span class="header-btn">
                                                <a href="<?php echo esc_url($charitize_customizer_all_values['charitize-donate-link'] );?>" class="button"><?php echo esc_html($charitize_customizer_all_values['charitize-donate-button-text'] );?></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
    <?php
    }
endif;
add_action( 'charitize_action_header', 'charitize_header', 10 );

if( ! function_exists( 'charitize_add_breadcrumb' ) ) :
    /**
     * Breadcrumb
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_add_breadcrumb(){
        global $charitize_customizer_all_values;
        // Bail if Breadcrumb disabled
        $breadcrumb_enable_breadcrumb = $charitize_customizer_all_values['charitize-enable-breadcrumb' ];
        if ( 1 != $breadcrumb_enable_breadcrumb ) {
            return;
        }
        // Bail if Home Page
        if ( is_front_page() || is_home() ) {
            return;
        }
        echo '<div id="breadcrumb" class="wrapper wrap-breadcrumb"><div class="container"><div class="breadcrumb-inner">';
         charitize_simple_breadcrumb();
        echo '</div></div><!-- .container-fluid --></div><!-- #breadcrumb -->';
        return;
    }
endif;
add_action( 'charitize_action_after_header', 'charitize_add_breadcrumb', 20 );