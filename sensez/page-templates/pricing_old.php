<?php
/*
Template Name: Pricing (Old)
*/

$result_id = $_COOKIE['result_id']
?>

<?php get_header() ?>

<?php
$product_id = get_field('product');
$product = new WC_Product($product_id);
$result =  get_field('profile_txt', $result_id);
$letter =  mb_substr($result, 0, 1)

?>

<section class="wrap-new-page section">
	<div class="pricing-banner">
      <div class="bg">
        <img src="<?= get_template_directory_uri() ?>/assets/img/p-icon-1-1.svg" alt="" class="img img-1">
        <img src="<?= get_template_directory_uri() ?>/assets/img/p-icon-1-2.svg" alt="" class="img img-2">
        <img src="<?= get_template_directory_uri() ?>/assets/img/p-icon-1-3.svg" alt="" class="img img-3">
        <img src="<?= get_template_directory_uri() ?>/assets/img/p-icon-1-4.svg" alt="" class="img img-4">
        <img src="<?= get_template_directory_uri() ?>/assets/img/p-bg-1.svg" alt="" class="bg-1">
      </div>
      <div class="container">
        <div class="logo-wrap">
          <img src="<?= get_template_directory_uri() ?>/assets/img/p-logo-1.svg" alt="" class="img img-4">
        </div>


        <h1><?php the_field('banner_title') ?> 😐</h1>

          <?php foreach (get_field('banner_text') as $text) {
                if ($letter === $text['letter'])
                    echo $text['text'];


          } ?>

        <div class="user-block">
          <div class="text">
            <p><?php the_field('banner_author_position') ?></p>
            <p class="h6"><?php the_field('banner_author') ?></p>
          </div>
        </div>

        <p class="sub-title"><?php the_field('banner_question') ?></p>
      </div>
      <div class="bottom">
        <p><?php the_field('banner_bottom_text') ?></p>
      </div>
    </div>
</section>

<section class="section section-pricing-01">
          <div class="elements">
            <div class="el el-01"></div>
            <div class="el el-02"></div>
            <div class="el el-03"></div>
            <div class="el el-04"></div>
          </div>
          <div class="wrapper">
            <div class="container">
                <?php if ($product): ?>
                      <div class="price-wrapper">
                        <div class="price-title">Just</div>
                          <?php if ($field = $product->sale_price ?: $product->regular_price): ?>
                              <div class="price-value">$<?= $field ?></div>
                          <?php endif ?>

                      </div>
                    <div class="btn-wrapper">
                        <a href="#" class="btn add-to-cart" data-result_id="<?= $result_id ?>" data-product_id="<?= $product->id ?>">
                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#fff" />
                            </svg>
                            <span><?php the_field('button_text_1') ?></span>
                        </a>
                    </div>


                <?php endif ?>

              <div class="list-wrapper">
                <div class="list-title">Including:</div>
                  <?php the_field('text') ?>

              </div>
            </div>
            <?php if ($field = get_field('image_1')): ?>
                <div class="image-wrapper" style="overflow: hidden">
                    <figure><?= wp_get_attachment_image($field['ID'], 'full') ?></figure>

                    <?php if ($field = get_field('image_2')): ?>
                        <div class="image-fixed">
                            <?= wp_get_attachment_image($field['ID'], 'full') ?>
                        </div>
                    <?php endif ?>
                </div>
            <?php endif ?>


          </div>
        </section>

<?php if( have_rows('bottom') ): ?>
		<?php while( have_rows('bottom') ): the_row(); ?>

			<div class="section section-pricing-02 fp-auto-height">
				<div class="elements">
					<div class="el el-01"></div>
					<div class="el el-02"></div>
					<div class="el el-03"></div>
					<div class="el el-04"></div>
				</div>
				<div class="container">

					<?php $images = get_sub_field('gallery');
					if($images): ?>

						<div class="images">
							<div class="inner">

								<?php foreach($images as $index => $image): ?>

									<figure class="image-0<?= $index + 1 ?>">
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									</figure>

								<?php endforeach; ?>

							</div>
						</div>

					<?php endif; ?>

					<div class="text">

						<?php if ($field = get_sub_field('title')): ?>
							<div class="title"><?= $field ?></div>
						<?php endif ?>

						<?php if ($field = get_sub_field('text')): ?>
							<p><?= $field ?></p>
						<?php endif ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>




<?php get_template_part('parts/reviews_demo', 'result') ?>

<?php /*get_template_part('parts/methodology_demo', 'result')*/ ?>

<?php get_footer() ?>
