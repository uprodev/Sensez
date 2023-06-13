<?php

include 'inc/ajax-actions.php'; // ajax
include 'inc/enqueue.php';      // add styles and scripts
include 'inc/acf.php';          // custom acf functions
include 'inc/extras.php';       // custom functions


add_theme_support( 'post-thumbnails');
add_theme_support( 'woocommerce');
add_theme_support( 'title-tag' );
add_theme_support('html5'); 

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu(){
	register_nav_menus( array(
        'main-menu' => 'main',
        'head-menu' => 'header',
        'mob-menu'  => 'mobile',
    )
);
}


add_filter( 'wpcf7_autop_or_not', '__return_false' );


add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}



add_action('wp_ajax_test_4_steps', 'test_4_steps');
add_action('wp_ajax_nopriv_test_4_steps', 'test_4_steps');
function test_4_steps(){

    $number_title = wp_count_posts('result')->publish + 1;

    $post_data = array(
        'post_title'    => 'Result ' . $number_title,
        'post_type'  => 'result',
        'post_status'   => 'publish',
    );

    $post_id = wp_insert_post($post_data);

    update_field('relation', array($_POST['relation']), $post_id);
    update_field('age', array($_POST['age']), $post_id);
    update_field('gender', array($_POST['gender']), $post_id);
    update_field('orientation', array($_POST['orientation']), $post_id);

    if (((int)$_POST['gender'] == 10 && (int)$_POST['orientation'] == 19) || ((int)$_POST['gender'] == 11 && (int)$_POST['orientation'] == 19)) 
        $gender_term_link = get_term_link((int)$_POST['gender']);
    else $gender_term_link = get_term_link(12);

    echo $gender_term_link;

    die();
}