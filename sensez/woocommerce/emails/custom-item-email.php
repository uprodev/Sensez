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

    $new_coupon = get_post($new_coupon_id);
}


?>


<?php //do_action( 'woocommerce_email_header', $email_heading ); ?>

<?php
$billing_first_name =  $order->get_billing_first_name();
$billing_last_name =   $order->get_billing_last_name(); ?>

<!--<h3 style="text-align: center">You've got an unique gift from <strong>--><?//= $billing_first_name ?><!--</strong></h3>-->

<?php if ($note) { ?>
<!--    <p style="-->
<!--    font-size: 32px;-->
<!--    font-weight: 700;-->
<!--    line-height: 43px;-->
<!--    letter-spacing: 0em;-->
<!--    color: #652FEB;-->
<!--    text-align: center;-->
<!--    " class="message">“--><?//= $note ?><!--”</p>-->

<?php } ?>


<!--<a href="https://sensez.co/" style="-->
<!--    border: none;-->
<!--    height: auto;-->
<!--    background: #6530ea;-->
<!--    color: #fff;-->
<!--    border-radius: 60px;-->
<!--    padding: 20px;-->
<!--    display: block;-->
<!--    text-align: center;-->
<!--    max-width: 200px;-->
<!--    line-height: normal;-->
<!--    text-decoration: none;-->
<!--    margin: 30px auto;-->
<!--">Start Now</a>-->
<!---->
<!--<p style="text-align: center">Your gift code:</p>-->
<!---->
<!--    <p style="-->
<!--    border: none;-->
<!--    height: auto;-->
<!--    color: #6530ea;-->
<!--    background: #fff;-->
<!--    border-radius: 60px;-->
<!--    padding: 20px;-->
<!--    display: block;-->
<!--    text-align: center;-->
<!--    max-width: 200px;-->
<!--    line-height: normal;-->
<!--    text-decoration: none;-->
<!--    margin: 30px auto;-->
<!--" >--><?//= $new_coupon_id ?><!--</p>-->
<!---->
<!---->
<!--    <a style="text-align: center; display: block" href="https://sensez.co/">Learn more</a><br>-->
<!--    <a style="text-align: center ; display: block" href="https://sensez.co/">Contact us</a>-->


<?php
/**
 * Admin new order email
 */
$order = new WC_order(   $item_data->order_id );

?>


<!--#template css-lock#-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="x-apple-disable-message-reformatting" content="" />
    <meta name="color-scheme" content="light dark" />
    <meta name="supported-color-schemes" content="light dark" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sensez Gift</title>
    <!--[if mso]>
      <style type="text/css">
        table {
          border-collapse: collapse;
          border-spacing: 0;
          margin: 0;
        }
        div,
        td {
          padding: 0;
        }
        div {
          margin: 0 !important;
        }
        #outlook a {
          padding: 0;
        }
        .ExternalClass,
        .ReadMsgBody {
          width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass td,
        .ExternalClass div,
        .ExternalClass span,
        .ExternalClass font {
          line-height: 100%;
        }

        div[style*="margin: 14px 0;"],
        div[style*="margin: 16px 0;"] {
          margin: 0 !important;
        }
      </style>
      <noscript>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG />
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
      </noscript>
    <![endif]-->
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        u + #body a {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        #MessageViewBody a {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (min-width: 700px) {
            .outer {
                width: 700px !important;
            }
        }

        @media screen and (max-width: 599px) {
            .logo {
                padding: 20px 0 !important;
            }
            .logo img {
                width: 80px !important;
                height: 80px !important;
            }
            h1 {
                font-size: 38px !important;
                line-height: 50px !important;
            }

            p {
                font-size: 24px !important;
                line-height: 30px !important;
            }

            p.small {
                font-size: 20px !important;
                line-height: 26px !important;
            }

            .button {
                padding: 15px 60px !important;
            }
        }
    </style>
</head>

<body style="margin: 0; padding: 0; word-spacing: normal; background-color: #f9f3e9">
<div lang="de" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f9f3e9">
    <style>
        .two-col-fixed .column-text {
            max-width: 70% !important;
        }
    </style>
    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 0; background-color: #f9f3e9" bgcolor="#F9F3E9">
                <!--[if (gte mso 9)|(IE)]>
                <table width="700" align="center" border="0" cellspacing="0" cellpadding="0"><tr><td width="700" align="center" valign="top">
                <![endif]-->
                <table class="outer" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; margin: 0 auto; max-width: 700px" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <td style="padding: 0 20px" align="center" valign="top">
                            <!-- header -->
                            <table border="0" cellpadding="0" cellspacing="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%" width="100%">
                                <tbody>
                                <tr>
                                    <td class="logo" style="padding: 56px 0 60px" align="center" valign="top">
                                        <a href="https://sensez.co/" target="_blank" style="text-decoration: none; border: none; outline: none"><img src="<?= get_template_directory_uri() ?>/assets/logo.png" alt="" width="124" height="124" style="display: inline-block; border: none" /></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- /header -->

                            <!-- text  -->
                            <table border="0" cellpadding="0" cellspacing="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%" width="100%">
                                <tbody>
                                <tr>
                                    <td style="padding: 0 0 68px" align="center" valign="top">
                                        <h1 style="margin: 0 0 10px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 700; font-size: 48px; line-height: 65px; text-align: center; color: #0a0517">
                                            <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                            Congratulations!
                                            <!--[if (mso)]></font><![endif]-->
                                        </h1>

                                        <p style="margin: 0 0 60px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 400; font-size: 32px; line-height: 43px; text-align: center; color: #0a0517">
                                            <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                            You've got an unique gift from <strong style="font-weight: 700"><?= $billing_first_name ?></strong>
                                            <!--[if (mso)]></font><![endif]-->
                                        </p>

                                        <p style="margin: 0 0 60px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 700; font-size: 32px; line-height: 43px; text-align: center; color: #652feb">
                                            <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                            “<?= $note ?>”
                                            <!--[if (mso)]></font><![endif]-->
                                        </p>

                                        <p style="margin: 0 0 10px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 700; font-size: 32px; line-height: 43px; text-align: center; color: #0a0517">
                                            <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                            Discover your sexuality with Sensez Quiz
                                            <!--[if (mso)]></font><![endif]-->
                                        </p>

                                        <p class="small" style="margin: 0 0 67px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 400; font-size: 28px; line-height: 39px; text-align: center; color: #0a0517">
                                            <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                            Just follow the link, enjoy the quiz <br />
                                            and use your gift code to get the results:
                                            <!--[if (mso)]></font><![endif]-->
                                        </p>

                                        <div>
                                            <!--[if mso]>
                                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://example.com" style="height:85px;v-text-anchor:middle;width:320px;" arcsize="50%" stroke="f" fillcolor="#652FEB">
                                                <w:anchorlock/>
                                                <center>
                                            <![endif]-->
                                            <a class="button" href="http://sensez.co" target="_blank" style="background-color: #652feb; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 32px; font-weight: 700; text-decoration: none; padding: 21px 79px; border-radius: 50px; color: #ffffff; display: inline-block; mso-padding-alt: 0; text-underline-color: #652feb; text-align: center">
                                                <!--[if (gte mso 9)|(IE)]><i style="mso-font-width: -100%; mso-text-raise: 10pt">&nbsp;</i><![endif]-->
                                                <span style="mso-text-raise: 8pt">
                                  <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif; font-weight:700"><![endif]-->
                                                    Start Now
                                                    <!--[if (mso)]></font><![endif]-->
                                </span>
                                                <!--[if (gte mso 9)|(IE)]><i style="mso-font-width: -100%">&nbsp;</i><![endif]-->
                                            </a>
                                            <!--[if mso]></center></v:roundrect><![endif]-->
                                        </div>

                                        <p style="margin: 40px 0 10px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 700; font-size: 28px; line-height: 39px; text-align: center; color: #0a0517">
                                            <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                            Your gift code:
                                            <!--[if (mso)]></font><![endif]-->
                                        </p>

                                        <div>
                                            <!--[if mso]>
                                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://example.com" style="height:85px;v-text-anchor:middle;width:320px;" arcsize="50%" stroke="f" fillcolor="#ffffff">
                                                <w:anchorlock/>
                                                <center>
                                            <![endif]-->
                                            <span style="background-color: #fff; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 32px; font-weight: 700; text-decoration: none; letter-spacing: 4.48px; padding: 21px 103px; border-radius: 50px; color: #652feb; display: inline-block; mso-padding-alt: 0; text-underline-color: #ffffff; text-align: center">
                                <!--[if (gte mso 9)|(IE)]><i style="mso-font-width: -100%; mso-text-raise: 10pt">&nbsp;</i><![endif]-->
                                <span style="mso-text-raise: 8pt">
                                  <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif; font-weight:700"><![endif]-->
                                    <?= $new_coupon->post_title ?>
                                    <!--[if (mso)]></font><![endif]-->
                                </span>
                                                <!--[if (gte mso 9)|(IE)]><i style="mso-font-width: -100%">&nbsp;</i><![endif]-->
                              </span>
                                            <!--[if mso]></center></v:roundrect><![endif]-->
                                        </div>

                                        <p style="margin: 60px 0 0; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 400; font-size: 20px; line-height: 29px; text-align: center; color: #0a0517">
                                            <a href="https://sensez.co/" target="_blank" style="text-decoration: underline; outline: none; color: #0a0517">
                                                <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                                Learn more
                                                <!--[if (mso)]></font><![endif]-->
                                            </a>
                                            <br />
                                            <a href="https://sensez.co/" target="_blank" style="text-decoration: underline; outline: none; color: #0a0517">
                                                <!--[if (mso)]><font style="font-family: Arial, Helvetica, sans-serif;"><![endif]-->
                                                Contact us
                                                <!--[if (mso)]></font><![endif]-->
                                            </a>
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- /text with image -->
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </table>
</div>
</body>
</html>





