<?php
/*
Template Name: Quiz
Template Post Type: test_page
*/

$p = get_query_var('quiz_page') ? get_query_var('quiz_page') : 1;

$result_id = isset($_COOKIE['result_id']) ? $_COOKIE['result_id'] : 0;

$gender = get_the_terms(get_the_id(), 'gender')[0]->slug;
?>



<?php get_header('empty') ?>


<script>
    var page = <?= $p ?>;
    var result_id = <?= $result_id ?>

    jQuery(document).ready(function(){
        if (page == 3) {
            // jQuery.fancybox.open(jQuery('#new1'), {
            //     touch: false,
            //     autoFocus: false,
            // });
            jQuery('#new1').show()
        }
        if (page == 5) {
            // jQuery.fancybox.open(jQuery('#new2'), {
            //     touch: false,
            //     autoFocus: false,
            // });
            jQuery('#new2').show()
        }

        if (page == 7) {
            // jQuery.fancybox.open(jQuery('#new3-<?= $gender ?>'), {
            //     touch: false,
            //     autoFocus: false,
            // });
            jQuery('#new3-<?= $gender ?>').show()
        }

        if (page == 9) {
            // jQuery.fancybox.open(jQuery('#new4'), {
            //     touch: false,
            //     autoFocus: false,
            // });
            jQuery('#new4').show()
        }

        jQuery('.popup-new .btn-v').on('click', function() {
            jQuery(this).parents('.popup-new').hide()
        })

    })

</script>

<?php

get_template_part('template-parts/quiz', $p%2 == 0 ? 'short' : 'long', ['page' => $p]);


get_template_part('template-parts/popups');

?>




<?php get_footer('empty') ?>

