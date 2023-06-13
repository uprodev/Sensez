<?php



/*
 *
 Template Name: Gift Form
*/

?><!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

<body>

    <div class="page-wrapper single-screen less-height">
        <section class="section block-gift block-gift-form">
            <div class="elements">
                <div class="el el-01"></div>
                <div class="el el-02"></div>
                <div class="el el-03"></div>
                <div class="el el-04"></div>
                <div class="el el-05"></div>
                <div class="el el-06"></div>
            </div>
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt=""></a>
                </div>
                <div class="link-back">
                    <a href="#">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icons/previous-dark.svg" alt="">
                        Back<span>&nbsp;to results</span>
                    </a>
                </div>
            </div>
            <div class="form">
                <div class="image"><img src="<?= get_template_directory_uri() ?>/assets/img/gift-01.svg" alt=""></div>
                <form action="#" id="formGift">
                    <h1>Please fill <br>the form</h1>
                    <div class="field">
                        <input type="text" name="name" placeholder="Your name/nickname*" required>
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Your email*" required>
                    </div>
                    <div class="field field-optional">
                        <input type="email" placeholder="Recipient’s e-mail (optional)">
                    </div>
                    <div class="field field-optional">
                        <textarea id="textarea" placeholder="Personal message (optional)"></textarea>
                    </div>
                    <div class="check-field">
                        <label>
                            <input type="checkbox" name="terms" checked="" required>
                            <span>By clicking you agree to our Privacy Policy and Terms &amp; Conditions</span>
                        </label>
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn btn-white" >
                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6"></path>
                            </svg>
                            next
                        </button>
                    </div>
                    <input type="hidden" name="action" value="create_coupon">
                </form>
                <div class="image"><img src="<?= get_template_directory_uri() ?>/assets/img/gift-02.svg" alt=""></div>
            </div>
        </section>

    </div>

    <?php wp_footer(); ?>
</body>
</html>
