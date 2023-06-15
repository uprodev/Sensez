<?php

/* phone number */

function phone_clear($phone_num){
    $phone_num = preg_replace("![^0-9]+!",'',$phone_num);
    return($phone_num);
}

/* pagination template */

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

    return ' <nav class="%1$s" >
		%3$s
	</nav>
	';
}

/* body_class */

add_filter( 'body_class','my_class_names' );
function my_class_names( $classes ) {

    // добавим класс 'class-name' в массив классов $classes
    if( is_checkout() || is_cart() )
        $classes[] = 'hide-mob-header-footer';

    return $classes;
}


/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy()
{
    global $typenow;
    $post_type = 'test_page'; // change to your post type
    $taxonomy = 'gender'; // change to your taxonomy
    if ($typenow == $post_type) {
        $selected = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => sprintf(__('Show all %s', 'textdomain'), $info_taxonomy->label),
            'taxonomy' => $taxonomy,
            'name' => $taxonomy,
            'orderby' => 'name',
            'selected' => $selected,

            'hide_empty' => true,
            'post_type' => $post_type
        ));
    };
}

/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query)
{
    global $pagenow;
    $post_type = 'test_page'; // change to your post type
    $taxonomy = 'gender'; // change to your taxonomy
    $q_vars = &$query->query_vars;
    if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
    }
}


function myplugin_register_query_vars( $vars ) {
    $vars[] = 'quiz_page';
    return $vars;
}
add_filter( 'query_vars', 'myplugin_register_query_vars' );






function gp_rewrite()
{

    add_rewrite_rule('^test_page/([^/]*)/([^/]*)/?','index.php?post_type=test_page&name=$matches[1]&quiz_page=$matches[2]','top');

    add_rewrite_tag('%quiz_page%', '([^/]+)');
    // add_rewrite_tag('%review_type%','([^/]+)');
}

add_action('init', 'gp_rewrite', 999);

