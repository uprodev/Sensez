<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
$result_id = $_COOKIE['result_id']
?>
<div class="woocommerce-billing-fields">


    <?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

    <div class="woocommerce-billing-fields__field-wrapper">
        <?php
        $fields = $checkout->get_checkout_fields( 'billing' );
        $values = [
            'billing_email' =>get_field('user_email', $result_id),
            'billing_first_name' =>get_field('user_name', $result_id),
        ];



        foreach ( $fields as $key => $field ) {
            $field['placeholder'] =  $field['label'];
            $field['label'] =  '';
            $field['class'] = 'field';



            woocommerce_form_field( $key, $field, $values[$key] );
        }
        ?>
    </div>

    <?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
</div>

