<?php

add_action( 'wp_enqueue_scripts', 'add_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );


function add_styles() {
    wp_enqueue_style('my-styles', get_template_directory_uri().'/assets/css/styles.css');
    wp_enqueue_style( 'my-theme', get_stylesheet_uri() );

}

function add_scripts() {

    wp_enqueue_script( 'my-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), false, true);
    wp_enqueue_script( 'my-gsap', get_template_directory_uri() . '/assets/js/gsap.js', array(), false, true);
    wp_enqueue_script( 'my-ScrollTrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.js', array(), false, true);



    if (is_page_template('page-templates/landing.php')) {
        wp_enqueue_script( 'my-fullpage', get_template_directory_uri() . '/assets/js/fullpage.js', array(), false, true);
        wp_enqueue_script( 'my-landing', get_template_directory_uri() . '/assets/js/landing.js', array(), false, true);
    }

    if (is_page_template('page-templates/4_steps.php')) {
        wp_enqueue_script( 'my-test', get_template_directory_uri() . '/assets/js/test.js', array(), false, true);
    }

    if (is_singular('test_page')) {
        wp_enqueue_script( 'my-lottie', get_template_directory_uri() . '/assets/js/lottie-player.js', array(), false, true);
        wp_enqueue_script( 'my-test', get_template_directory_uri() . '/assets/js/test.js', array(), false, true);
    }

    if (is_singular('result')) {
        wp_enqueue_script( 'my-fullpage', get_template_directory_uri() . '/assets/js/fullpage.js', array(), false, true);
        wp_enqueue_script( 'my-graph', get_template_directory_uri() . '/assets/js/graph.js', array(), false, true);

        if (get_field('payment') == 'Demo') wp_enqueue_script( 'my-result', get_template_directory_uri() . '/assets/js/result.js', array(), false, true);
        if (get_field('payment') == 'Basic') wp_enqueue_script( 'my-result-basic', get_template_directory_uri() . '/assets/js/result-basic.js', array(), false, true);
        if (get_field('payment') == 'Advanced') wp_enqueue_script( 'my-result-advanced', get_template_directory_uri() . '/assets/js/result-advanced.js', array(), false, true);

    }



    wp_enqueue_script( 'jquery.maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.js', array(), false, true);

    wp_enqueue_script( 'forms', get_template_directory_uri() . '/assets/js/forms.js', array(), false, true);


    wp_enqueue_script('jqueryvalidation',  'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js', array(), false, 1);

    wp_enqueue_script( 'add', get_template_directory_uri() . '/assets/js/add.js', array(), false, true);

    wp_enqueue_script( 'actions', get_template_directory_uri() . '/assets/js/actions.js', array(), false, true);


    /*wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);

     wp_localize_script('main', 'globals',
        array(
            'url' => admin_url('admin-ajax.php'),
            'template' => get_template_directory_uri(),
            'fav' => get_field('fav', 'user_'. get_current_user_id())
        )
    );*/

    $coordinates =   get_field('calc_ext', get_the_id());
    $coordinates_array = is_array($coordinates) ? $coordinates : json_decode($coordinates, 1);
    wp_localize_script('my-graph', 'coordinates', $coordinates_array);

}
