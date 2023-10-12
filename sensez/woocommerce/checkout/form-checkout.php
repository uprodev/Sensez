<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


$result_id = $_GET['result_id'] ? $_GET['result_id'] : $_COOKIE['result_id'];
?>
<h1>Checkout</h1>

<form  name="checkout" method="post" class="form checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

    <?php if ( $checkout->get_checkout_fields() ) : ?>

        <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

        <div class="col2-set" id="customer_details">
            <div class="col-1 ">
                <?php do_action( 'woocommerce_payment_placement' ); ?>
            </div>

            <div class="col-2">

                <?php do_action( 'woocommerce_checkout_billing' ); ?>

                <?php //do_action( 'woocommerce_checkout_shipping' ); ?>

                <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>


                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

                <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

                <svg style="width: 200px; height: 100px" xmlns="http://www.w3.org/2000/svg" height="800" width="1200" viewBox="-17.85 -6.5 154.7 39"><path d="M113 26H6c-3.314 0-6-2.686-6-6V6c0-3.314 2.686-6 6-6h107c3.314 0 6 2.686 6 6v14c0 3.314-2.686 6-6 6zM11.128 8.892H8.571v7.241h1.347v-2.6h1.21c1.474 0 2.526-.947 2.526-2.315 0-1.368-1.052-2.326-2.526-2.326zm5.915 1.853c-1.589 0-2.715 1.136-2.715 2.757 0 1.61 1.126 2.757 2.715 2.757s2.705-1.147 2.705-2.757c0-1.621-1.116-2.757-2.705-2.757zm9.893.126l-1.063 3.578-1.063-3.578h-1.22l-1.063 3.578-1.063-3.578h-1.347l1.81 5.262h1.21l1.063-3.578 1.074 3.578h1.21l1.799-5.262zm4.316-.126c-1.505 0-2.599 1.126-2.599 2.715 0 1.641 1.115 2.799 2.704 2.799.589 0 1.189-.137 1.789-.41v-1.127c-.547.316-1.084.495-1.568.495-.884 0-1.515-.547-1.6-1.347h3.568c.021-.179.021-.347.021-.495 0-1.546-.937-2.63-2.315-2.63zm6.472.052c-.147-.042-.294-.052-.442-.052-.452 0-.915.231-1.294.652v-.526h-1.347v5.262h1.347v-3.515c.347-.442.821-.684 1.263-.684.158 0 .326.021.473.063zm3.084-.052c-1.505 0-2.599 1.126-2.599 2.715 0 1.641 1.116 2.799 2.705 2.799.589 0 1.189-.137 1.789-.41v-1.127c-.548.316-1.084.495-1.569.495-.883 0-1.515-.547-1.599-1.347h3.567c.021-.179.021-.347.021-.495 0-1.546-.936-2.63-2.315-2.63zm8.104-2.179h-1.358v2.663c-.41-.316-.873-.484-1.336-.484-1.4 0-2.378 1.136-2.378 2.757 0 1.62.978 2.757 2.378 2.757.463 0 .926-.168 1.336-.495v.369h1.358zm6.778 2.179c-.452 0-.915.168-1.336.484V8.566h-1.347v7.567h1.347v-.369c.421.327.884.495 1.336.495 1.41 0 2.378-1.137 2.378-2.757 0-1.621-.968-2.757-2.378-2.757zm6.62.126l-1.273 3.452-1.263-3.452h-1.379l2.01 5.072-1.01 2.494H60.7l2.989-7.566zm10.799-.583c.863 0 1.96.264 2.824.731V8.344c-.941-.375-1.881-.519-2.822-.519-2.303 0-3.838 1.203-3.838 3.213 0 3.143 4.316 2.633 4.316 3.988 0 .525-.456.695-1.089.695-.941 0-2.155-.389-3.108-.907v2.711c1.056.454 2.126.644 3.105.644 2.361 0 3.988-1.166 3.988-3.21 0-3.386-4.341-2.778-4.341-4.056 0-.443.37-.615.965-.615zm9.071-2.274h-2.156l-.002-2.466-2.772.59-.013 9.109c0 1.681 1.265 2.922 2.95 2.922.928 0 1.614-.168 1.992-.376v-2.311c-.363.145-2.155.666-2.155-1.007v-4.04h2.156zm6.095.001c-.378-.136-1.705-.384-2.37.838l-.178-.839h-2.455v9.952h2.838v-6.747c.671-.881 1.804-.711 2.165-.594zm3.724-3.785l-2.85.606v2.313l2.85-.606zm0 3.784h-2.85v9.952h2.85zm6.126-.189c-1.113 0-1.832.524-2.224.89l-.148-.701h-2.5l.001 13.254 2.839-.604.006-3.213c.408.299 1.015.718 2.009.718 2.031 0 3.889-1.634 3.889-5.242 0-3.306-1.878-5.102-3.872-5.102zm8.924 0c-2.701 0-4.345 2.296-4.345 5.188 0 3.424 1.938 5.156 4.704 5.156 1.357 0 2.376-.308 3.147-.736v-2.287c-.774.39-1.662.628-2.789.628-1.107 0-2.082-.392-2.209-1.723h5.559c.013-.153.038-.748.038-1.023 0-2.908-1.408-5.203-4.105-5.203zm-.018 2.315c.697 0 1.437.537 1.437 1.815h-2.936c0-1.279.789-1.815 1.499-1.815zm-9.585 5.521c-.666 0-1.063-.24-1.339-.539l-.017-4.219c.296-.325.705-.563 1.356-.563 1.039 0 1.754 1.164 1.754 2.649 0 1.529-.704 2.672-1.754 2.672zm-42.04-.56c-.368 0-.737-.158-1.052-.473v-2.252c.315-.316.684-.474 1.052-.474.758 0 1.284.653 1.284 1.6 0 .947-.526 1.599-1.284 1.599zm-8.893 0c-.769 0-1.295-.652-1.295-1.599s.526-1.6 1.295-1.6c.368 0 .736.158 1.041.474v2.252c-.305.315-.673.473-1.041.473zm-5.757-3.315c.599 0 1.031.495 1.073 1.211h-2.294c.063-.726.568-1.211 1.221-1.211zm-9.557 0c.6 0 1.032.495 1.074 1.211h-2.295c.064-.726.569-1.211 1.221-1.211zm-14.156 3.347c-.789 0-1.336-.663-1.336-1.631s.547-1.631 1.336-1.631c.779 0 1.326.663 1.326 1.631s-.547 1.631-1.326 1.631zm-6.104-2.694H9.918V9.987h1.021c.779 0 1.326.495 1.326 1.231 0 .726-.547 1.221-1.326 1.221z" fill="#424770" opacity=".502" fill-rule="evenodd"/></svg>

            </div>



        </div>



        <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

    <?php endif; ?>


    <input type="hidden" name="result_id" value="<?= $result_id ?>">

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
