<?php
/*
Template Name: Quiz
Template Post Type: test_page
*/

$p = get_query_var('quiz_page') ? get_query_var('quiz_page') : 1;

$result_id = isset($_COOKIE['result_id']) ? $_COOKIE['result_id'] : 0;


?>

<script>
    var page = <?= $p ?>;
    var result_id = <?= $result_id ?>
</script>


<?php get_header('empty') ?>

<?php

get_template_part('template-parts/quiz', $p%2 == 0 ? 'short' : 'long', ['page' => $p]);

?>



<?php get_footer('empty') ?>

