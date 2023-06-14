<?php
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{

//    $fields['shipping']['shipping_city']['required'] = false;
//    $fields['shipping']['shipping_address_1']['required'] = false;
//    $fields['shipping']['shipping_postcode']['required'] = false;
//
//    $fields['shipping']['shipping_city']['label'] = "Город";
//
//    $fields['shipping']['shipping_postcode']['label'] = "Этаж";
//    $fields['shipping']['shipping_address_1']['label'] = "Квартира";
//    $fields['shipping']['shipping_address_2']['label'] = "Улица, дом";
//
//
//    $fields['shipping']['shipping_city']['priority'] = 1;
//    $fields['shipping']['shipping_address_2']['priority'] = 2;
//




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


//    $fields['billing']['billing_company']['placeholder'] = 'Business Name';
//    $fields['billing']['billing_company']['label'] = 'Business Name';
//    $fields['billing']['billing_first_name']['placeholder'] = 'First Name';
//    $fields['shipping']['shipping_first_name']['placeholder'] = 'First Name';
//    $fields['shipping']['shipping_last_name']['placeholder'] = 'Last Name';
//    $fields['shipping']['shipping_company']['placeholder'] = 'Company Name';
//    $fields['billing']['billing_last_name']['placeholder'] = 'Last Name';
//    $fields['billing']['billing_email']['placeholder'] = 'Email Address ';
//    $fields['billing']['billing_phone']['placeholder'] = 'Phone ';
    return $fields;
}


remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);
add_action('woocommerce_payment_placement', 'woocommerce_checkout_payment', 20);
