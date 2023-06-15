<?php



/*
 *
 Template Name: Checkout
*/

?><!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="utf-8" />
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

<div class="page-wrapper single-screen">
    <section class=" section block-payment">

        <?php if ($_GET['key']) { ?>
        <div class="elements">
            <div class="el el-01"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-01.svg" alt="" /></div>
            <div class="el el-02"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-02.svg" alt="" /></div>
            <div class="el el-03"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-03.svg" alt="" /></div>
            <div class="el el-04"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-04.svg" alt="" /></div>
            <div class="el el-05"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-05.svg" alt="" /></div>
            <div class="el el-06"><img src="<?= get_template_directory_uri() ?>/assets/img/elements/payment/el-06.svg" alt="" /></div>
        </div>
        <?php } ?>


        <div class="container">
            <div class="logo">
                <a href="#"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="" /></a>
            </div>



            <?php the_content() ?>


        </div>
    </section>

<!--    <footer class="page-footer">-->
<!--        <div class="container">-->
<!--            <p>&copy; 2023 Sensez. <br />ALL RIGHTS RESERVED.</p>-->
<!--            <ul>-->
<!--                <li><a href="#">TERMS OF SERVICE</a></li>-->
<!--                <li><a href="#">PRIVACY POLICY</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </footer>-->
<!--</div>-->

    <?php get_footer('empty') ?>

<?php wp_footer(); ?>
</body>
</html>
