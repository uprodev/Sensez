<?php

$actions = [
    'ajax_registration',
//    'ajax_login',
//    'ajax_reset',
    'qty_cart',
    'remove_item_from_cart',
    'apply_coupon',


    'create_coupon',
    'add_to_cart',
    'submit_quiz'

];
foreach ($actions as $action) {
    add_action("wp_ajax_{$action}", $action);
    add_action("wp_ajax_nopriv_{$action}", $action);
}


function ajax_registration()
{

    if ($_POST['email']  ) {


        $email = $_POST['email'];
        $name = $_POST['name'];
        $result_id = $_POST['result_id'];
        update_field('user_email', $email, $result_id);
        update_field('user_name', $name, $result_id);


        wp_send_json([
            'url' => get_permalink($result_id)
        ]);


        wp_die();
    }
}





function create_coupon() {

    /**
     * Create a coupon programatically
     */
    $coupon_code = rand(10000000000, 99900000000); // Code
    $amount = '15.99'; // Amount
    $discount_type = 'fixed_cart'; // Type: fixed_cart, percent, fixed_product, percent_product

    $coupon = array(
        'post_title' => $coupon_code,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_type' => 'shop_coupon');

    $new_coupon_id = wp_insert_post( $coupon );

// Add meta
    update_post_meta( $new_coupon_id, 'discount_type', $discount_type );
    update_post_meta( $new_coupon_id, 'coupon_amount', $amount );
    update_post_meta( $new_coupon_id, 'individual_use', 'yes' );
    update_post_meta( $new_coupon_id, 'product_ids', '' );
    update_post_meta( $new_coupon_id, 'exclude_product_ids', '' );
    update_post_meta( $new_coupon_id, 'usage_limit', '1' );
    update_post_meta( $new_coupon_id, 'expiry_date', '' );
    update_post_meta( $new_coupon_id, 'apply_before_tax', 'yes' );
    update_post_meta( $new_coupon_id, 'free_shipping', 'no' );

    WC()->cart->empty_cart();
    WC()->cart->add_to_cart(611, 1, '', '', ['new_coupon_id' => $new_coupon_id]);



    wp_send_json([
        'id' => $new_coupon_id,
        'url' => get_permalink(142)
    ]);
}

function plugin_republic_add_cart_item_data( $cart_item_data, $product_id, $variation_id ) {
    if( isset( $_POST['new_coupon_id'] ) ) {
        $cart_item_data['new_coupon_id'] = sanitize_text_field( $_POST['new_coupon_id'] );
    }
    return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'plugin_republic_add_cart_item_data', 10, 3 );


function plugin_republic_checkout_create_order_line_item( $item, $cart_item_key, $values, $order ) {
    if( isset( $values['new_coupon_id'] ) ) {
        $item->add_meta_data(
            __( 'new_coupon_id', 'plugin-republic' ),
            $values['new_coupon_id'],
            true
        );
    }
}
add_action( 'woocommerce_checkout_create_order_line_item', 'plugin_republic_checkout_create_order_line_item', 10, 4 );



function apply_coupon()
{

    WC()->cart->remove_coupons( );

    $coupon = trim($_POST['code']);

    $result = WC()->cart->apply_coupon( (int)$coupon );

    $result_id = $_POST['result_id'];

    if (!$result)
        $msg = 'Code is invalid!';
    else {

        $coupon_id = wc_get_coupon_id_by_code($coupon);
        update_field('payment', 'Advanced', $result_id);
        update_field('gift_code', $coupon, $result_id);
        update_field('usage_count', 1, $coupon_id);

    }

    wp_send_json(
        [
            'msg' => $msg,
            'url' => get_permalink($result_id),
            'code' => get_metadata('post', $coupon_id   )
        ]
    );
    die();
}



/**
 * add_to_cart
 */


function add_to_cart()
{

    $product_id = (int)$_GET['product_id'];

    $qty = 1;
    WC()->cart->empty_cart();
    $added = WC()->cart->add_to_cart($product_id, $qty);


    wp_send_json(
        [
            'url' => get_permalink(142),
        ]
    );

    //   WC_AJAX::get_refreshed_fragments();
    wp_die();
}


function submit_quiz() {
    $result_id = (int)$_POST['result_id'];
    $data =  $_POST['data'];

    if ($data) {
        $answers = [];
        foreach ( $data as $key => $value) {
            $post_id = explode('-',$key)[1];
            $answers[] = [
                'question' => (int)$post_id,
                'answer' => (int)$value,
                ];

        }

        update_field('field_6447f54ae4c15', $answers, $result_id );

        $answers = get_field('field_6447f54ae4c15', $result_id);

        $calc = [];
        foreach ($answers as $answer) {
            $cat = get_the_terms($answer['question']->ID, 'question_cat')[0];
            $cat_name = $cat->name;
            $cat_parent = get_term($cat->parent);
            $cat_parent_name = $cat_parent->name;
            $calc_array[$cat_parent_name][$cat_name] += $answer['answer'];
            $calc[$cat_parent_name] += $answer['answer'];
            $calc_ext[$cat_parent_name . $cat_name] += $answer['answer'];
        }

        $plus = [
            'Д' => 0.1,
            'Ю' => 0.2,
            'В' => 0.3,
            'З' => 0.4
        ];

        $initial = $calc;
        foreach ($calc as $key => $cat) {
            $calc[$key] = $cat + $plus[$key];
        }

        arsort($calc);
        $profile = implode('', array_keys($calc));

        $DDMMYY = get_the_date('Ymd',$post_id);

        $X = get_field('code', 'term_'. get_field('gender', $result_id));
        $YY = get_term(  get_field('age'))->name;
        $Z = get_field('code', 'term_'.  get_field('orientation', $result_id));

        $CAA = $initial['Д'];
        $DBB = $initial['Ю'];
        $ECC = $initial['В'];
        $FDD = $initial['З'];

        $code = "$DDMMYY$X$YY$Z$CAA$DBB$ECC$FDD";



        update_field('calc', $calc, $result_id );
        update_field('calc_ext', $calc_ext, $result_id );
        update_field('profile_txt', $profile, $result_id );
        update_field('code', $code, $result_id );

        $q = new WP_Query([
            'post_type' => 'profile',
            'meta_key' => 'profile',
            'meta_value' => $profile
        ]);

        if($q->found_posts) {
            $profile_id = $q->posts[0]->ID;
            update_field('profile', $profile_id, $result_id );
        }



        wp_update_post([
            'ID' => $result_id,
            'post_name' => $code,
            'post_status' => 'publish'
        ]);
        wp_send_json([
            'url' => get_permalink(389),
            'calc' => $calc,
            'calc_ext' => $calc_ext,
            'profile' =>  $profile,
            'code' => $code,
            'data' => $data
        ]);
    }
}


add_action('template_redirect', function(){
//    WC()->cart->empty_cart();
//    WC()->cart->add_to_cart(146, 1);





//    $answers =  get_field('answers'  );
//
//    print_r($answers);
//    die();
});
