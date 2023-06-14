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




            <h1>Payment successful</h1>
            <p>We have your results ready</p>

            <div class="bar">
                <div class="bar-inner"></div>
                <div class="bar-icon"></div>
            </div>
            <div class="image">
                <img src="<?= get_template_directory_uri() ?>/assets/img/payment.svg" alt="" />
            </div>


