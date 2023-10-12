<?php if (get_field('gift', 'option')): ?>
    <section class="section res-screen-06">
        <div class="container">
            <div class="wrapper">
                <div class="text">

                    <?php if ($field = get_field('gift', 'option')['title']): ?>
                        <h2><?= $field ?></h2>
                    <?php endif ?>

                    <div class="share">

                        <?php if (!get_field('payment') || get_field('payment') == 'Demo'): ?>
                        <button>
                        <?php else: ?>
                            <a href="#">
                            <?php endif ?>

                            <?php if ($field = get_field('gift', 'option')['text']): ?>
                                <span><?= $field ?></span>
                            <?php endif ?>

                            <span>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.616 6.01063C7.82401 9.31334 0.543582 12.0793 0.437286 12.1572C-0.0178353 12.4906 -0.141973 13.2253 0.180468 13.6774C0.355032 13.9221 1.49231 14.497 8.42028 17.8423L13.6482 20.3667L16.2809 25.8216C19.7354 32.9795 20.0785 33.6577 20.3405 33.8464C20.4916 33.9551 20.6724 34 20.9587 34C21.4109 34 21.7 33.8378 21.917 33.4625C22.1499 33.0596 34 1.33462 34 1.11402C34 0.543765 33.4258 -0.0124225 32.8501 0.000211217C32.7133 0.00323727 25.408 2.70792 16.616 6.01063ZM21.2723 11.1043L14.2529 18.1286L9.1571 15.6688C6.35439 14.3159 4.08106 13.189 4.10525 13.1647C4.15764 13.1118 28.107 4.09347 28.2163 4.08545C28.2578 4.08243 25.1331 7.24087 21.2723 11.1043ZM25.4093 17.817C22.9297 24.4292 20.877 29.866 20.8477 29.8987C20.8183 29.9315 20.1169 28.5532 19.2889 26.8359C18.4609 25.1185 17.3537 22.8279 16.8284 21.7456L15.8733 19.7776L22.8733 12.764C26.7233 8.90656 29.8833 5.76037 29.8954 5.77263C29.9076 5.78481 27.8889 11.2048 25.4093 17.817Z"
                                    fill="white"
                                    />
                                </svg>
                            </span>

                            <?php if (!get_field('payment') || get_field('payment') == 'Demo'): ?>
                        </button>
                        <div class="box-share-hidden">

                            <?php get_template_part('parts/share', 'result_start_inner') ?>

                        </div>
                    <?php else: ?>
                    </a>
                <?php endif ?>

            </div>
        </div>
        <div class="image">
            <figure>
                <picture>

                    <?php if ($field = get_field('gift', 'option')['image']): ?><source media="(min-width: 768px)" srcset="<?= $field['url'] ?>" /><?php endif ?>

                    <?php if ($field = get_field('gift', 'option')['image_mobile']): ?>
                        <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
                    <?php endif ?>

                </picture>
            </figure>

            <?php
            $product_id = get_field('gift', 'option')['product'];
            $product = new WC_Product($product_id)
            ?>

            <?php if ($field = $product->regular_price): ?>
                <div class="price">$<?= $field ?></div>
            <?php endif ?>

            <?php if ($field = get_field('gift', 'option')['link']): ?>
                <a href="<?= get_permalink(391) ?>?result_id=<?php the_id() ?>" class="btn btn-outlined"<?php if($field['target']) echo ' target="_blank"' ?>>
                    <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                    </svg>
                    <?= $field['title'] ?>
                </a>
            <?php endif ?>

        </div>
    </div>
</div>

<?php if (get_field('payment') == 'Demo'): ?>
    <button class="btn-top">
        <?php _e('Go top', 'Sensez') ?>
        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 19L7 1" stroke="white" />
            <path d="M1 7L7 1L13 7" stroke="white" />
        </svg>
    </button>
<?php endif ?>

</section>
<?php endif ?>
