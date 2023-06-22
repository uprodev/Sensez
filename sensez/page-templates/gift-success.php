<?php



/*
 *
 Template Name: Gift Success
*/


$result_id = get_permalink($_COOKIE['result_id']);

if (!$_GET['order_id'])
    wp_redirect(get_permalink(391));

$order = new WC_Order($_GET['order_id']);

foreach ($order->get_items() as $item) {


    if (!$item['product_id'] == 611) {
        wp_redirect(get_permalink(391). '?order_id='. $order->get_id());
    } else {

        $new_coupon_id = ($item->get_meta( 'new_coupon_id', true ));
        if (!$new_coupon_id)
            wp_redirect(get_permalink(391));
        else {
            $coupon = get_post($new_coupon_id);
        }


    }
}


?><!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="utf-8" />
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<div class="page-wrapper single-screen">
    <section class="section block-gift block-gift-success">
        <div class="elements">
            <div class="el el-01"></div>
            <div class="el el-02"></div>
            <div class="el el-03"></div>
            <div class="el el-04"></div>
            <div class="el el-05"></div>
            <div class="el el-06"></div>
            <div class="el el-07"></div>
        </div>
        <div class="container">
            <div class="logo">
                <a href="/"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="" /></a>
            </div>
            <div class="link-back">
                <a href="<?= get_permalink($result_id) ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icons/previous-dark.svg" alt="" />
                    Back<span>&nbsp;to results</span>
                </a>
            </div>
            <h1>Thank you <br />for choosing <br />Sensez!</h1>
            <p>We sent an email with <br />a gift code to the recipient!</p>
            <div class="code">
                <div class="code-value"><?= $coupon->post_title ?></div>
                <div><button class="code-copy">Copy code</button></div>
            </div>
            <div class="image"><img src="<?= get_template_directory_uri() ?>/assets/img/gift-03.svg" alt="" /></div>
        </div>
        <div class="gift-support">
            <a href="#"><strong>SUPPORT</strong>Contact us in case of any issue</a>
        </div>
    </section>

    <?php get_template_part('parts/bottom') ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
