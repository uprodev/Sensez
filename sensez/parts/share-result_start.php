<?php if (get_field('share_results', 'option')): ?>
    <div class="box-share">
        <span class="btn-share"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/share.svg" alt="" /></span>
        <div class="box-share-hidden">
            
            <?php get_template_part('parts/share', 'result_start_inner') ?>

        </div>
    </div>
    <?php endif ?>