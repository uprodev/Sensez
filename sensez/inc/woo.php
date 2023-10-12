<?php

add_filter( 'woocommerce_email_classes', 'filter_woocommerce_email_classes' );
function filter_woocommerce_email_classes( array $email_classes ): array {
     require_once   get_template_directory(). '/classes/class-custom-email.php';

    $email_classes['Custom_Email'] = new Custom_Email();

    return $email_classes;
}



add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{

    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_state']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_phone']);

    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_country']);

    return $fields;
}


remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);
add_action('woocommerce_payment_placement', 'woocommerce_checkout_payment', 20);


add_action( 'woocommerce_payment_complete', 'so_payment_complete' );
function so_payment_complete( $order_id ){
    $order = wc_get_order( $order_id );

    foreach ($order->get_items() as $item) {
        if ($item['product_id'] == 611) {

    //   wp_mail('oleg.derimedved@gmail.com', 'tst', 'order '.$order_id);
            WC()->mailer()->emails['Custom_Email']->trigger( $order_id );
        }
    }
}


add_action('init', function(){

    if ($_GET['mail']) {
       // $success = mail('oleg.derimedved@gmail.com', 'asdasdasd dsa', 'sadasd asdsd ');
//   if (!$success) {


        WC()->mailer()->emails['Custom_Email']->trigger( 1209 );


//        define("HTML_EMAIL_HEADERS", array('Content-Type: text/html; charset=UTF-8'));
//
//
//        $mailer = WC()->mailer();
//        $html = ( 'Please click <a href="'.$url.'">here</a> to verify your email address and complete the registration process.' ); // This is the html template for your email message body
//        $wrapped_message = $mailer->wrap_message(__( 'Activate your Account' ), $html);
//        $wc_email = new WC_Email;
//        $html_message = $wc_email->style_inline($wrapped_message);
//        wp_mail( 'oleg.derimedved@gmail.com', __( 'Activate your Account' ), $html_message, HTML_EMAIL_HEADERS );



            die();
  //      }
    }

});


add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {




        if ( ! empty( $_POST['result_id'] ) ) {
            update_post_meta( $order_id, 'result_id', sanitize_text_field( $_POST['result_id'] ) );

        }



}

add_action('template_redirect', function(){

    if ($_GET['offer_id']) {
        WC()->cart->empty_cart();
        WC()->cart->add_to_cart($_GET['offer_id'], 1, '', '', [

        ]);

    }
});

