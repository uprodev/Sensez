<?php if (get_field('payment_results_basic', 'option')): ?>
  <section class="section res-screen-07">
    <div class="elements">
      <div class="el el-01"></div>
      <div class="el el-02"></div>
      <div class="el el-03"></div>
      <div class="el el-04"></div>
      <div class="el el-05"></div>
    </div>
    <div class="container">

      <?php if ($field = get_field('payment_results_basic', 'option')['title']): ?>
        <h2><?= $field ?></h2>
      <?php endif ?>

      <div class="payment-variants">
        <div class="col">
          <div class="buttons">
            <span class="buttons-upgrade"><?php _e('Upgrade', 'option') ?></span>
            <span class="buttons-arrow">
              <picture>
                <source media="(min-width: 1024px)" srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/buttons-arrow-1366.svg" />
                  <source media="(min-width: 1600px)" srcset="<?= get_stylesheet_directory_uri() ?>/assets/img/buttons-arrow.svg" />
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/buttons-arrow.svg" alt="" />
                  </picture>
                </span>
                <span class="buttons-more"><?php _e('Get more!', 'option') ?></span>
              </div>
            </div>
            <div class="col">
              <div class="item">

                <?php if ($field = get_field('payment_results_basic', 'option')['text']): ?>
                  <?= $field ?>
                <?php endif ?>

                <div class="price">

                  <?php
                  $product_id = get_field('payment_results_basic', 'option')['product'];
                  $product = new WC_Product($product_id)
                  ?>

                  <?php if ($field = $product->regular_price): ?>
                    <span><?= $field ?></span>
                  <?php endif ?>

                  <?php if ($field = $product->sale_price): ?>
                    <strong>$<?= $field ?></strong>
                  <?php endif ?>

                </div>

                <?php if ($field = get_field('payment_results_basic', 'option')['link']): ?>
                  <a href="<?= $field['url'] ?>" class="btn btn-pink add-to-cart" data-result_id="<?= the_id() ?>" data-product_id="901"<?php if($field['target']) echo ' target="_blank"' ?>>
                    <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                    </svg>
                    <?= $field['title'] ?>
                  </a>
                <?php endif ?>

                <?php if ($field = get_field('payment_results_basic', 'option')['list']): ?>
                  <?= $field ?>
                <?php endif ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endif ?>
