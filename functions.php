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
        wp_enqueue_script('lime-js', get_template_directory_uri() . '/js/scripts.min.js', array('slick'), '', true );
    }
    add_action('wp_enqueue_scripts', 'lime_theme_scripts');


    // ACF OPTIONS PAGE
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }
    
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
                <td><?php the_title(); ?></td>
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


?>
