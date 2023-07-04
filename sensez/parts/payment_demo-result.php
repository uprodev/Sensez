<?php if (get_field('payment_results_demo', 'option')): ?>
  <section class="section res-screen-03">
    <div class="container">

      <?php if ($field = get_field('payment_results_demo', 'option')['title']): ?>
        <h2><?= $field ?></h2>
      <?php endif ?>

      <?php if(get_field('payment_results_demo', 'option')['items']): ?>

        <div class="payment-variants">

          <?php foreach (get_field('payment_results_demo', 'option')['items'] as $item): ?>

          <?php
          $product_id = $item['product'];
          $product = new WC_Product($product_id)

          ?>


            <div class="col">
              <div class="item item--<?= $item['class'] ?>">

                <?php if ($item['is_popular']): ?>
                  <div class="popular"><span><?php _e('Popular!', 'Sensez') ?></span></div>
                <?php endif ?>

                <?php if ($item['text']): ?>
                  <?= $item['text'] ?>
                <?php endif ?>




                  <div class="price">$<?= $product->regular_price ?></div>


                <?php if ($item['link']): ?>
                  <a href="<?= $item['link']['url'] ?>" class="add-to-cart btn btn-<?= $item['link_color'] ?>"  data-result_id="<?= the_id() ?>" data-product_id="<?= $product_id ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

                    <?php if ($item['link_color'] == 'white'): ?>
                      <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                      </svg>
                    <?php else: ?>
                      <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#FFFFFF" />
                      </svg>
                    <?php endif ?>

                    <?= $item['link']['title'] ?>
                  </a>
                <?php endif ?>

                <?php if ($item['list']): ?>
                  <?= $item['list'] ?>
                <?php endif ?>

                <button class="read-more"><?php _e('More details...', 'Sensez') ?></button>
              </div>
            </div>

          <?php endforeach ?>

        </div>

      <?php endif; ?>

      <div class="wrapper">

        <?php if ($field = get_field('payment_results_demo', 'option')['gift_link']): ?>
          <a href="<?= $field['url'] ?>" class="btn btn-pink"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
        <?php endif ?>

        <?php $images = get_field('payment_results_demo', 'option')['methods'];
        if($images): ?>

          <div class="payment-methods">

            <?php foreach($images as $image): ?>

              <figure class="m-01">
                <?= wp_get_attachment_image($image['ID'], 'full') ?>
              </figure>

            <?php endforeach; ?>

          </div>

        <?php endif; ?>

        <p>100% secure <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/secure.svg" alt="" /></p>
      </div>
    </div>
  </section>
  <?php endif ?>
