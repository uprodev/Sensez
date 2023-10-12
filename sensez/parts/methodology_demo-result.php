<?php if (get_field('methodology_results_demo', 'option')): ?>
  <section class="section res-screen-05<?php if(is_page_template('page-templates/pricing.php')) echo ' section-pricing-03' ?>">
    <div class="bg">
      <div class="container">
        <div class="wrapper">

          <?php if ($field = get_field('methodology_results_demo', 'option')['image']): ?>
            <div class="image">
              <figure>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              </figure>
            </div>
          <?php endif ?>
          
          <?php if ($field = get_field('methodology_results_demo', 'option')['text']): ?>
            <div class="text">
              <div class="inner"><?= $field ?></div>
            </div>
          <?php endif ?>
          
        </div>

        <?php if ($field = get_field('methodology_results_demo', 'option')['list']): ?>
          <div class="list"><?= $field ?></div>
        <?php endif ?>

        <?php if (is_page_template('page-templates/pricing.php')): ?>

          <?php
          $product_id = get_field('product');
          $product = new WC_Product($product_id)
          ?>

          <?php if (($field = get_field('button_text_3')) && $product): ?>
            <div class="btn-wrapper">
              <a href="#" class="btn btn-black add-to-cart" data-result_id="<?= the_id() ?>" data-product_id="<?= $product->id ?>">
                <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#fff" />
                </svg>
                <span><?= $field ?></span>
              </a>
            </div>
          <?php endif ?>
          
        <?php endif ?>
        
      </div>
      <?php if (($field = get_field('methodology_results_demo', 'option')['quote']) && !is_page_template('page-templates/pricing.php')): ?>
      <div class="cite">
        <div class="container">
          <div class="inner">
            <blockquote><?= $field ?></blockquote>
          </div>
        </div>
      </div>
    <?php endif ?>
    
  </div>
</section>
<?php endif ?>