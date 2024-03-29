<?php if( have_rows('feedback_results', 'option') ): ?>

    <section class="section res-screen-09 fp-auto-height">
        <div class="elements">
            <div class="el el-01"></div>
            <div class="el el-02"></div>
            <div class="el el-03"></div>
        </div>
        <div class="container">
            <div class="wrapper">

                <?php while( have_rows('feedback_results', 'option') ): the_row(); ?>

                    <div class="col">

                        <?php if ($field = get_sub_field('title')): ?>
                            <h2><?= $field ?></h2>
                        <?php endif ?>

                        <?php if (get_row_index() == 1): ?>
                        <a href="<?php the_permalink(4515) ?>" class="link-claim">Claim Refund</a>
                        <?php endif ?>

                        <?php if (($field = get_field('feedback_bottom_text', 'option')) && get_row_index() == 2): ?>
                            <p><?= $field ?> <span class="code"><?php the_field('code') ?></span></p>
                        <?php endif ?>
                        
                        <?php if ($field = get_sub_field('link')): ?>
                            <a href="<?= $field['url'] ?>" class="btn btn-<?php the_sub_field('link_color') ?>"<?php if($field['target']) echo ' target="_blank"' ?>>

                                <?php if (get_sub_field('is_link_image')): ?>
                                    <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                                    </svg>
                                <?php endif ?>
                                
                                <?= $field['title'] ?>
                            </a>
                        <?php endif ?>

                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </section>

<?php endif; ?>