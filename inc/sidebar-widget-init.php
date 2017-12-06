<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function charitize_widgets_init() {
	register_sidebar( array(
		'name'          =>  esc_html__( 'Sidebar', 'charitize' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    $charitize_get_all_options = charitize_get_all_options(1);
    $charitize_footer_widgets_number = $charitize_get_all_options['charitize-footer-sidebar-number'];

    if( $charitize_footer_widgets_number > 0 ){
        register_sidebar(array(
            'name' => __('Footer Column One', 'charitize'),
            'id' => 'footer-col-one',
            'description' => __('Displays items on footer section.','charitize'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));
        if( $charitize_footer_widgets_number > 1 ){
            register_sidebar(array(
                'name' => __('Footer Column Two', 'charitize'),
                'id' => 'footer-col-two',
                'description' => __('Displays items on footer section.','charitize'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ));
        }
        if( $charitize_footer_widgets_number > 2 ){
            register_sidebar(array(
                'name' => __('Footer Column Three', 'charitize'),
                'id' => 'footer-col-three',
                'description' => __('Displays items on footer section.','charitize'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ));
        }
    }
}
add_action( 'widgets_init', 'charitize_widgets_init' );

