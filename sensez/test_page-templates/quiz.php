<?php
/*
Template Name: Quiz
Template Post Type: test_page
*/

$p = get_query_var('quiz_page') ? get_query_var('quiz_page') : 1;


?>

<?php get_header('empty') ?>

    <?php

        get_template_part('template-parts/quiz', $p%2 == 0 ? 'short' : 'long', ['page' => $p]);

    ?>

<?php get_footer('empty') ?>
