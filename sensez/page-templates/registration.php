<?php
/*
 *
 Template Name: Registration Page
*/
?>

 <?php get_header('empty') ?>

 <section class="section block-result-form">
    <div class="elements">
        <div class="el el-01"></div>
    </div>
    <div class="container">
        <div class="logo">
            <a href="#"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="" /></a>
        </div>
        <div class="text">
            <div class="label"><span>CONFIDENTIALITY GUARANTEED</span></div>
            <div class="subtitle">Oh, what an adventure this was!</div>
            <h1>We have your results ready</h1>
        </div>
        <div class="bar">
            <div class="bar-inner"></div>
            <div class="bar-icon"></div>
        </div>
        <div class="form">
            <form id="regForm" action="#">
                <div class="field">
                    <input type="text" name="name" placeholder="Your name/nickname*"  required />
                </div>
                <div class="field">
                    <input type="email" name="email" placeholder="Your email*" required />
                </div>
                <div class="check-field">
                    <label>
                        <input name="agree" required type="checkbox" checked />
                        <span>By clicking you agree to our Privacy Policy and Terms & Conditions</span>
                    </label>
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-white" disabled>
                        <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                        </svg>
                        next
                    </button>
                </div>
                <input type="hidden" name="action" value="ajax_registration">
                <input type="hidden" name="result_id" value="<?= $_COOKIE['result_id'] ?>">
            </form>
        </div>
    </div>
</section>

<?php get_footer() ?>