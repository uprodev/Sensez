<?php
/**
 * Admin new order email
 */


$order =   new WC_Order($item_data);
$opening_paragraph = __( 'A new order has been made by %s. The details of the item are as follows:', 'custom-email' );

$items = $order->get_items();

foreach ( $order->get_items() as $item_id => $item ) {

    // Here you get your data
    $new_coupon_id = wc_get_order_item_meta( $item_id, 'new_coupon_id', true );
    $note = wc_get_order_item_meta( $item_id, 'note', true );

    //new_coupon_id
}


?>


<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<?php
$billing_first_name =  $order->get_billing_first_name();
$billing_last_name =   $order->get_billing_last_name(); ?>

<h3 style="text-align: center">You've got an unique gift from <strong><?= $billing_first_name ?></strong></h3>

<?php if ($note) { ?>
    <p style="
    font-size: 32px;
    font-weight: 700;
    line-height: 43px;
    letter-spacing: 0em;
    color: #652FEB;
    text-align: center;
    " class="message">“<?= $note ?>”</p>

<?php } ?>


<a href="https://sensez.co/" style="
    border: none;
    height: auto;
    background: #6530ea;
    color: #fff;
    border-radius: 60px;
    padding: 20px;
    display: block;
    text-align: center;
    max-width: 200px;
    line-height: normal;
    text-decoration: none;
    margin: 30px auto;
">Start Now</a>

<p style="text-align: center">Your gift code:</p>

    <p style="
    border: none;
    height: auto;
    color: #6530ea;
    background: #fff;
    border-radius: 60px;
    padding: 20px;
    display: block;
    text-align: center;
    max-width: 200px;
    line-height: normal;
    text-decoration: none;
    margin: 30px auto;
" ><?= $new_coupon_id ?></p>


    <a style="text-align: center; display: block" href="https://sensez.co/">Learn more</a><br>
    <a style="text-align: center ; display: block" href="https://sensez.co/">Contact us</a>


<?php
/**
 * Admin new order email
 */
$order = new WC_order(   $item_data->order_id );


do_action( 'woocommerce_email_footer', $email );
?>





