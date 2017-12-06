<?php
if ( ! function_exists( 'charitize_featured_slider_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Charitize 1.0.0
     *
     * @param string $from_slider
     * @return array
     */
    function charitize_featured_slider_array( $from_slider ){
        global $charitize_customizer_all_values;
        $charitize_feature_slider_number = absint( $charitize_customizer_all_values['charitize-feature-slider-number'] );
        $charitize_feature_slider_single_words = absint( $charitize_customizer_all_values['charitize-fs-single-words'] );
        $charitize_feature_slider_default_args =    array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'orderby' => 'post__in'
        );
        $charitize_fature_section_default_post_query = new WP_Query( $charitize_feature_slider_default_args );
            while ( $charitize_fature_section_default_post_query->have_posts() ) : $charitize_fature_section_default_post_query->the_post();
                $charitize_feature_slider_contents_array[0]['charitize-feature-slider-title'] = get_the_title();
                $charitize_feature_slider_contents_array[0]['charitize-feature-slider-content'] = charitize_words_count( $charitize_feature_slider_single_words ,get_the_content());
                $charitize_feature_slider_contents_array[0]['charitize-feature-slider-link'] = get_the_permalink();
                $charitize_feature_slider_contents_array[0]['charitize-feature-slider-image'] = get_the_post_thumbnail( );
            endwhile;
        $repeated_page = array('charitize-feature-slider-pages-ids');
        $charitize_feature_slider_args = array();

        if ( 'from-category' ==  $from_slider ){
            $charitize_feature_slider_category = $charitize_customizer_all_values['charitize-featured-slider-category'];
            if( 0 != $charitize_feature_slider_category ){
                $charitize_feature_slider_args =    array(
                    'post_type' => 'post',
                    'cat' => $charitize_feature_slider_category,
                    'ignore_sticky_posts' => true
                );
            }
        }
        else{
            $charitize_feature_slider_posts = evision_customizer_get_repeated_all_value(6 , $repeated_page);
            $charitize_feature_slider_posts_ids = array();
            if( null != $charitize_feature_slider_posts ) {
                foreach( $charitize_feature_slider_posts as $charitize_feature_slider_post ) {
                    if( 0 != $charitize_feature_slider_post['charitize-feature-slider-pages-ids'] ){
                        $charitize_feature_section_posts_ids[] = $charitize_feature_slider_post['charitize-feature-slider-pages-ids'];
                    }
                }

                if( !empty( $charitize_feature_section_posts_ids )){
                    $charitize_feature_slider_args =    array(
                        'post_type' => 'page',
                        'post__in' => $charitize_feature_section_posts_ids,
                        'posts_per_page' => $charitize_feature_slider_number,
                        'orderby' => 'post__in'
                    );
                }

            }
        }
        if( !empty( $charitize_feature_slider_args )){
            // the query
            $charitize_fature_section_post_query = new WP_Query( $charitize_feature_slider_args );

            if ( $charitize_fature_section_post_query->have_posts() ) :
                $i = 0;
                while ( $charitize_fature_section_post_query->have_posts() ) : $charitize_fature_section_post_query->the_post();
                    $url ='';
                    if(has_post_thumbnail()){
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'charitize-home-main-slider' );
                        $url = $thumb['0'];
                    }
                    $charitize_feature_slider_contents_array[$i]['charitize-feature-slider-title'] = get_the_title();
                    $charitize_feature_slider_contents_array[$i]['charitize-feature-slider-content'] = charitize_words_count( $charitize_feature_slider_single_words ,get_the_content());
                    $charitize_feature_slider_contents_array[$i]['charitize-feature-slider-link'] = get_permalink();
                    $charitize_feature_slider_contents_array[$i]['charitize-feature-slider-image'] = $url;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $charitize_feature_slider_contents_array;
    }
endif;

if ( ! function_exists( 'charitize_featured_home_slider' ) ) :
    /**
     * Featured Slider
     *
     * @since Charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_featured_home_slider() { 
        global $charitize_customizer_all_values;

        if( 1 != $charitize_customizer_all_values['charitize-feature-slider-enable'] ){
            return null;
        }
        $charitize_feature_slider_selection_options = $charitize_customizer_all_values['charitize-feature-slider-selection'];
        $charitize_slider_arrays = charitize_featured_slider_array( $charitize_feature_slider_selection_options );


        if( is_array( $charitize_slider_arrays )){
        $charitize_feature_slider_number = absint( $charitize_customizer_all_values['charitize-feature-slider-number'] );
        $charitize_feature_slider_mode = $charitize_customizer_all_values['charitize-fs-slider-mode'];
        $charitize_feature_slider_time = $charitize_customizer_all_values['charitize-fs-slider-time'];
        $charitize_feature_slider_pause_time = $charitize_customizer_all_values['charitize-fs-slider-pause-time'];
        $charitize_feature_enable_arrow = $charitize_customizer_all_values['charitize-fs-enable-arrow'];
        $charitize_feature_enable_pager = $charitize_customizer_all_values['charitize-fs-enable-pager'];
        $charitize_feature_enable_autoplay = $charitize_customizer_all_values['charitize-fs-enable-autoplay'];
        $charitize_feature_enable_title = $charitize_customizer_all_values['charitize-fs-enable-title'];
        $charitize_feature_enable_caption = $charitize_customizer_all_values['charitize-fs-enable-caption'];
        $charitize_feature_enable_button = $charitize_customizer_all_values['charitize-fs-enable-button-text'];
        

    ?>
    <section class="wrapper wrapper-slider">
        <?php if( 1 == $charitize_feature_enable_arrow){ ?>
            <div class="controls">
                <a href="#" id="charitize-prev"><i class="fa fa-angle-left"></i></a> 
                <a href="#" id="charitize-next"><i class="fa fa-angle-right"></i></a>
            </div>
        <?php }  ?>
        <div class="container-fluid">
            <div class="cycle-slideshow"
            data-cycle-log="false"
            data-cycle-fx=<?php echo esc_attr( $charitize_feature_slider_mode);?>
            data-cycle-speed="<?php echo (esc_attr( $charitize_feature_slider_time) * 1000)?>"
            data-cycle-carousel-fluid=true
            data-cycle-carousel-visible=1
            data-cycle-pause-on-hover="true"
            data-cycle-slides="> div"
            data-cycle-prev="#charitize-prev"
            data-cycle-next="#charitize-next"
            data-cycle-auto-height=container
            <?php if( 1 == $charitize_feature_enable_pager){ ?>
                data-cycle-pager="#charitize-pager"
            <?php }  ?>
            <?php if( 1 != $charitize_feature_enable_autoplay){ ?>
                data-cycle-timeout=0
            <?php }  ?>
            <?php if(1 == $charitize_feature_enable_autoplay){ ?>
                data-cycle-timeout=<?php echo (esc_attr( $charitize_feature_slider_pause_time) * 1000)?>
            <?php }  ?>
            >
                <?php
                $i = 1;
                foreach( $charitize_slider_arrays as $charitize_slider_array ){
                    if( $charitize_feature_slider_number < $i){
                        break;
                    }
                    if(empty($charitize_slider_array['charitize-feature-slider-image'])){
                        $charitize_feature_slider_image = get_template_directory_uri().'/assets/img/slider.png';
                    }
                    else{
                        $charitize_feature_slider_image =$charitize_slider_array['charitize-feature-slider-image'];
                    }
                    ?>
                    <div class="slide-item" style="background-image: url('<?php echo esc_url( $charitize_feature_slider_image )?>');">
                        <div class="container-fluid">
                            <div class="thumb-overlay main-slider-overlay"></div>
                            <div class="row">
                                <div class="col-xs-8 col-sm-8 col-md-6 col-xs-offset-2 banner-content">
                                    <?php if ((1 == $charitize_feature_enable_title) || (1 == $charitize_feature_enable_caption) || ( 1 == $charitize_feature_enable_button)){?>
                                        <div class="banner-content-holder">
                                            <div class="banner-content-inner">
                                                <?php if( 1 == $charitize_feature_enable_title) {
                                                    ?>
                                                        <h1 class="slider-title"><a href="<?php echo esc_url( $charitize_slider_array['charitize-feature-slider-link'] );?>"><?php echo esc_html( $charitize_slider_array['charitize-feature-slider-title'] );?></a></h1>
                                                    <?php
                                                }
                                                if( 1 == $charitize_feature_enable_caption){
                                                    ?>
                                                    <div class="text-content">
                                                        <?php echo wp_kses_post( $charitize_slider_array['charitize-feature-slider-content'] );?>
                                                    </div>
                                                    <?php
                                                }

                                                if ( !empty($charitize_feature_enable_button)){ ?>
                                                    <div class="btn-holder"><a href="<?php echo esc_url( $charitize_slider_array['charitize-feature-slider-link'] );?>" class="button"><?php echo esc_html( $charitize_customizer_all_values['charitize-fs-enable-button-text'] );?></a></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                $i++;
                }
                ?>
            </div>
        </div>
        <div class="cycle-pager" id="charitize-pager"></div>
    </section>
    <?php
        }
    }
endif;
add_action( 'charitize_action_front_page', 'charitize_featured_home_slider', 10 );