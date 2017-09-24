<?php

    // ENQUEUE STYLES
    function lime_theme_styles() {

        wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Montserrat|Muli');
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
        wp_enqueue_style( 'lime-css', get_template_directory_uri() . '/css/styles.min.css');
    }
    add_action('wp_enqueue_scripts', 'lime_theme_styles');


    // REPLACE DEFAULT JQUERY WITH GOOGLE JQUERY
    function lime_jquery() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', '', false);
       wp_enqueue_script('jquery');
    }
    add_action('wp_enqueue_scripts', 'lime_jquery');


    // ENQUEUE SCRIPTS
    function lime_theme_scripts() {
        wp_enqueue_script('materialise-js', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'), '', true );
        wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
        // wp_enqueue_script('lime-js', get_template_directory_uri() . '/js/scripts.min.js', array('slick'), '', true );
        wp_enqueue_script('lime-js', get_template_directory_uri() . '/src/scripts.js', array('slick'), '', true );
    }
    add_action('wp_enqueue_scripts', 'lime_theme_scripts');


    // ACF OPTIONS PAGE
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    // REGISTER MATERIALIZE NAV WALKER
    require_once get_template_directory() . '/wp_materialize_navwalker.php';

    // NAV MENUS
    function register_lime_menus() {

    register_nav_menus(
        array(
            'main_menu' => __('Main Menu'),
            'mobile_menu' => __('Mobile Menu')
            )
        );
    }
    add_action('init', 'register_lime_menus');


    // ADD AJAX TO WORDPRESS HEADER
    add_action( 'wp_head', 'my_ajaxurl' );
    function my_ajaxurl() {
        $html = '<script type="text/javascript">';
        $html .= 'var ajaxurl = "' . admin_url( 'admin-ajax.php' ) . '"';
        $html .= '</script>';
        echo $html;
    }


    // RESOURCE HUB FILTER

    add_action( 'wp_ajax_resourcehub_filter', 'resourcehub_filter' );
    add_action( 'wp_ajax_nopriv_resourcehub_filter', 'resourcehub_filter' );

    function resourcehub_filter() {

        // GET VARS
        $the_topic_filter = $_POST['send_the_topic_filter'];
        $the_resourcetype_filter = $_POST['send_the_resourcetype_filter'];

        // LOOP ALL RESOURCES  (filter)
        global $post;

        // FOR NO FILTERS SELECTED

        if( $the_topic_filter == '' && $the_resourcetype_filter == '' ){

            $args = array(
                'post_type' => 'resource',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'orderby' => 'date',
                'order' => 'DESC',
            );

        } else {

            $args = array(
                'post_type' => 'resource',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',

                'tax_query' => array(

                    'relation' => 'OR',

                    array(
                        'taxonomy' => 'topic_tax',
                        'field'    => 'slug',
                        'terms'    => $the_topic_filter
                    ),

                    array(
                        'taxonomy' => 'resource_tax',
                        'field'    => 'slug',
                        'terms'    => $the_resourcetype_filter
                    ),

                ),
            );
        }

        $myposts = get_posts( $args );

        foreach ($myposts as $post) : start_wp(); ?>

            <tr>
                <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                <td><?php echo the_field('author'); ?></td>
                <td>
                    <!-- GET ACF TAXONOMY -->
                    <?php

                        $terms = get_field('topic');

                        if( $terms ):
                        foreach( $terms as $term ):

                             echo $term->name; echo ' ';

                         endforeach;

                    endif; ?>

                </td>
                <td><span class="new badge" data-badge-caption="

                    <?php
                        $terms = get_field('resourcetype');
                        if( $terms ):
                            foreach( $terms as $term ):
                                echo $term->name;
                            endforeach;
                        endif;
                    ?>

                "></span></td>
            </tr>

         <?php endforeach;

        rewind_posts();

        wp_die();

    }


    // PATHWAYS FILTER

    add_action( 'wp_ajax_pathways_filter', 'pathways_filter' );
    add_action( 'wp_ajax_nopriv_pathways_filter', 'pathways_filter' );

    function pathways_filter() {

        // GET VARS
        $the_university_filter = $_POST['send_the_university_filter'];
        $the_entrylevel_filter = $_POST['send_the_entrylevel_filter'];
        $the_country_filter = $_POST['send_the_country_filter'];
        $the_state_filter = $_POST['send_the_state_filter'];
        $the_sip_filter = $_POST['send_the_sip_filter'];
        $the_umat_filter = $_POST['send_the_umat_filter'];
        $the_gamsat_filter = $_POST['send_the_gamsat_filter'];
        $the_marks_filter = $_POST['send_the_marks_filter'];
        $the_interview_filter = $_POST['send_the_interview_filter'];
        $the_prereq_filter = $_POST['send_the_prereq_filter'];
        $the_prep_filter = $_POST['send_the_prep_filter'];


        // LOOP ALL RESOURCES  (filter)
        global $post;

        // FOR NO FILTERS SELECTED

        if( $the_university_filter == '' && $the_entrylevel_filter == '' && $the_country_filter == '' && $the_state_filter == '' && $the_sip_filter == '' && $the_umat_filter == '' && $the_gamsat_filter == '' && $the_marks_filter == '' && $the_interview_filter == '' && $the_prereq_filter == '' && $the_prep_filter == '' ){

            $args = array(
                'post_type' => 'pathway',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
            );

        } 
        
        else {

            $args = array(

                'post_type' => 'pathway',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',

                'tax_query' => array(

                    'relation' => 'OR',
                    
                    array(
                        'taxonomy' => 'uni_tax',
                        'field'    => 'slug',
                        'terms'    => $the_university_filter,
                    ),

                    array(
                        'taxonomy' => 'entry_level_tax',
                        'field'    => 'slug',
                        'terms'    => $the_entrylevel_filter
                    ),

                    array(
                        'taxonomy' => 'country_tax',
                        'field'    => 'slug',
                        'terms'    => $the_country_filter
                    ),

                    array(
                        'taxonomy' => 'state_tax',
                        'field'    => 'slug',
                        'terms'    => $the_state_filter
                    ),

                    array(
                        'taxonomy' => 'sip_tax',
                        'field'    => 'slug',
                        'terms'    => $the_sip_filter,
                    ),

                    array(
                        'taxonomy' => 'umat_tax',
                        'field'    => 'slug',
                        'terms'    => $the_umat_filter
                    ),

                    array(
                        'taxonomy' => 'gamsat_tax',
                        'field'    => 'slug',
                        'terms'    => $the_gamsat_filter
                    ),                                                                                

                    array(
                        'taxonomy' => 'marks_tax',
                        'field'    => 'slug',
                        'terms'    => $the_marks_filter
                    ),   

                    array(
                        'taxonomy' => 'interview_tax',
                        'field'    => 'slug',
                        'terms'    => $the_interview_filter
                    ),   

                    array(
                        'taxonomy' => 'prereq_tax',
                        'field'    => 'slug',
                        'terms'    => $the_prereq_filter
                    ),                       

                    array(
                        'taxonomy' => 'prep_tax',
                        'field'    => 'slug',
                        'terms'    => $the_prep_filter
                    ),   

                ),

            );
        }


        $myposts = get_posts( $args );

        foreach ($myposts as $post) : start_wp(); ?>

            <tr>
                <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                <td>            
                    <?php 
                        $term = get_field('university');
                        if( $term ): ?>
                            <?php echo $term->name; ?>
                    <?php endif; ?>
                </td>
            </tr>

         <?php endforeach;

        rewind_posts();

        wp_die();

    }


?>
