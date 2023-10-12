<?php



/*
 *
 Template Name: Checkout
*/

 ?>

 <?php get_header('empty') ?>

 <section class=" section block-payment"
 <?php if (!$_GET['key']) { ?>
    style="height: auto !important;"
    <?php } ?>>

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
            <a href="/"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="" /></a>
        </div>



        <?php the_content() ?>


    </div>
</section>

<?php get_footer('empty') ?>
