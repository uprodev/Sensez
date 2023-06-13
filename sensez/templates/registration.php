<?php



/*
 *
 Template Name: Registration Page
*/

get_header();
?>

    <div class="page-wrapper single-screen less-height">
        <section class="section block-payment">
            <div class="elements">
                <div class="el el-01"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-01.svg" alt=""></div>
                <div class="el el-02"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-02.svg" alt=""></div>
                <div class="el el-03"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-03.svg" alt=""></div>
                <div class="el el-04"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-04.svg" alt=""></div>
                <div class="el el-05"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-05.svg" alt=""></div>
                <div class="el el-06"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-06.svg" alt=""></div>
            </div>
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt=""></a>
                </div>
                <h1>Payment successful</h1>
                <p>We have your results ready</p>

                <div class="bar">
                    <div class="bar-inner" style="width: 100%;"></div>
                    <div class="bar-icon" style="left: 100%;"></div>
                </div>
                <div class="image">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/payment.svg" alt="">
                </div>
            </div>
        </section>

        <footer class="page-footer">
            <div class="container">
                <p>© 2023 Sensez. <br>ALL RIGHTS RESERVED.</p>
                <ul>
                    <li><a href="#">TERMS OF SERVICE</a></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                </ul>
            </div>
        </footer>
    </div>



<?php get_footer();
