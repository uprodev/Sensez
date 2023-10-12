<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php

$result_id = $_COOKIE['result_id'] ?? $_GET['RESULT_ID'];
foreach ($order->get_items() as $item) {
    if ($item['product_id'] == 611) {
        wp_redirect(get_permalink(529). '?order_id='. $order->get_id());
        die();
    } else {
        update_field('order', $order->get_id(), $result_id);
    }

    if ($item['product_id'] == 146) {
        update_field('payment', 'Advanced', $result_id);
    }

    if ($item['product_id'] == 901) {
        update_field('payment', 'Advanced', $result_id);
    }

    if ($item['product_id'] == 3089) {
        update_field('payment', 'Advanced', $result_id);
    }


    if ($item['product_id'] == 145) {
        update_field('payment', 'Basic', $result_id);
    }

   // update_field('result_id', $result_id, $order->get_id());
}

?>

<script>
    jQuery(document).ready(function(){
        setTimeout(function(){
            location.href = '<?= get_permalink($result_id) ?>'
        }, 2500)
    })
</script>

            <h1>Payment successful</h1>
            <p>We have your results ready</p>

            <div class="bar">
                <div class="bar-inner"></div>
                <div class="bar-icon"></div>
            </div>
            <div class="image">
                <img src="<?= get_template_directory_uri() ?>/assets/img/payment.svg" alt="" />
            </div>


