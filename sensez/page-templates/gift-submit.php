<?php



/*
 *
 Template Name: Gift Submit
*/


$result_id = get_permalink($_COOKIE['result_id']);


?><!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="utf-8" />
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<div class="page-wrapper single-screen">
    <section class="section block-gift block-gift-code">
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
                <a href="#"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="" /></a>
            </div>
            <div class="link-back">
                <a href="<?= get_permalink($result_id) ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icons/previous-dark.svg" alt="" />
                    Back<span>&nbsp;to results</span>
                </a>
            </div>
            <h1>Enter your <br />Gift Code</h1>
            <p>to get your advanced <br />personal results</p>
            <div class="form">
                <form id="giftSubmit" action="#">
                    <div class="field">
                        <input type="text" required name="code" id="inputCode" placeholder="____" />
                        <p class="result field-message"></p>
                    </div>

                    <div class="submit">
                        <button type="submit" class="btn btn-white" disabled >
                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                            </svg>
                            Apply
                        </button>
                    </div>
                    <input type="hidden" name="action" value="apply_coupon">
                    <input type="hidden" name="result_id" value="<?= $_COOKIE['result_id'] ?>">

                </form>
            </div>
        </div>
        <div class="contact-us">
            <button class="contact-us-close"><img src="<?= get_template_directory_uri() ?>/assets/img/icons/ico-contacts-close.svg" alt="" /></button>
            <span><img src="<?= get_template_directory_uri() ?>/assets/img/icons/ico-contacts.svg" alt="" /></span>
            <span>contact us</span>
        </div>
    </section>

    <?php get_template_part('parts/bottom') ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
