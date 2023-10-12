<?php
/*
Template Name: Pricing
*/

$result_id = $_COOKIE['result_id']
?>

<?php get_header('empty') ?>

<?php

$product_id = get_field('product');
$product = new WC_Product($product_id);
$result =  get_field('profile_txt', $result_id);
$letter =  mb_substr($result, 0, 1);
$profile_id = get_field('profile', $result_id);

$scales_json = get_field('calc', $result_id);
$scales = is_array($scales_json) ? $scales_json : json_decode($scales_json, 1);

if ($scales) {

  $max_scale = 0;
  $max_scale_key = '';
  foreach ($scales as $key => $value) {
    if($value > $max_scale){
      $max_scale = $value;
      $max_scale_key = $key;
    }
  }

  $min_scale = 100;
  $min_scale_key = '';
  foreach ($scales as $key => $value) {
    if($value < $min_scale){
      $min_scale = $value;
      $min_scale_key = $key;
    }
  }

}

?>

<div class="page-content">
  <section class="res-new-01 res-orange">
    <div class="elements">
      <div class="el el-01"></div>
      <div class="el el-02"></div>
      <div class="el el-03"></div>
      <div class="el el-04"></div>
    </div>
    <div class="section-header">
      <div class="container">

        <?php if ($field = get_field('logo', 'option')): ?>
          <div class="logo">
            <a href="<?= get_home_url() ?>">
              <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
            </a>
          </div>
        <?php endif ?>

        <div class="inner">
          <h1>
            <?php the_field('user_name', $result_id) ?>, 

            <?php if(have_rows('banner_text')): ?>
              <?php while(have_rows('banner_text')): the_row() ?>

                <?php if ($letter === get_sub_field('letter')) the_sub_field('text', false, false);; ?>

              <?php endwhile ?>
            <?php endif ?>

          </h1>

          <?php if ($field = get_field('img_description', $profile_id)): ?>
            <div class="image">
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            </div>
          <?php endif ?>

        </div>
      </div>
    </div>
    <div class="section-description">
      <div class="container">
        <div class="inner">
          <div class="description-list">

            <?php 
            switch ($max_scale_key) {
              case 'Д':
              $type = 'Energy ';
              break;
              case 'Ю':
              $type = 'Sexuality ';
              break;
              case 'В':
              $type = 'Self-regulation';
              break;
              case 'З':
              $type = 'Mindfulness';
              break;

              default:
              break;
            }
            ?>

            <div class="description-list-left">
              <dl>
                <dt>Your type:</dt>
                <dd><?= $type ?></dd>
              </dl>
            </div>

            <?php 
            switch ($min_scale_key) {
              case 'Д':
              $weakness = 'Energy ';
              break;
              case 'Ю':
              $weakness = 'Sexuality ';
              break;
              case 'В':
              $weakness = 'Self-regulation';
              break;
              case 'З':
              $weakness = 'Mindfulness';
              break;

              default:
              break;
            }
            ?>

            <div class="description-list-right">
              <dl>
                <dt>Your WEAKNESS:</dt>
                <dd><?= $weakness ?></dd>
              </dl>
            </div>
          </div>

          <?php if(have_rows('banner_text')): ?>
            <?php while(have_rows('banner_text')): the_row() ?>

              <?php if ($letter === get_sub_field('letter')) the_sub_field('text_2');; ?>

            <?php endwhile ?>
          <?php endif ?>

        </div>
      </div>
    </div>
  </section>

  <section class="res-new-02">
    <div class="elements">
      <div class="el el-01"></div>
      <div class="el el-02"></div>
      <div class="el el-03"></div>
    </div>
    <div class="container">

      <?php if(have_rows('lists_2')): ?>

        <div class="row">

          <?php while(have_rows('lists_2')): the_row() ?>

            <div class="col">
              <div class="list list--<?php the_sub_field('title') ?>">

                <?php if ($field = get_sub_field('title')): ?>
                  <div class="list-title"><?= $field ?></div>
                <?php endif ?>
                
                <?php if ($field = get_sub_field('text')): ?>
                  <?= $field ?>
                <?php endif ?>
                
              </div>

              <?php if ($field = get_sub_field('image')): ?>
                <div class="col-image">
                  <?= wp_get_attachment_image($field['ID'], 'full') ?>
                </div>
              <?php endif ?>

            </div>

          <?php endwhile ?>

        </div>

      <?php endif ?>

      <div class="block-scales">
        <h2>Your resource distribution chart</h2>
        <div class="wrapper">
          <div class="item color-pink">
            <p>Your <span>energy</span> level</p>
            <div class="scale">
              <div class="scale-title"><span class="counter" data-text="<?= $scales['Д'] ?>">0</span><span class="divider">/</span><small>60</small></div>
              <div class="bar">
                <div class="bar-inner" data-width="<?= calc_data_width($scales['Д']) ?>"></div>
                <div class="bar-text-start">01</div>
                <div class="bar-text-end">60</div>
              </div>
            </div>
          </div>
          <div class="item color-orange">
            <p>Your <span>sexuality</span> level</p>
            <div class="scale">
              <div class="scale-title"><span class="counter" data-text="<?= $scales['Ю'] ?>">0</span><span class="divider">/</span><small>60</small></div>
              <div class="bar">
                <div class="bar-inner" data-width="<?= calc_data_width($scales['Ю']) ?>"></div>
                <div class="bar-text-start">01</div>
                <div class="bar-text-end">60</div>
              </div>
            </div>
          </div>
          <div class="item color-yellow">
            <p>Your <span>self-regulation</span> level</p>
            <div class="scale">
              <div class="scale-title"><span class="counter" data-text="<?= $scales['В'] ?>">0</span><span class="divider">/</span><small>60</small></div>
              <div class="bar">
                <div class="bar-inner" data-width="<?= calc_data_width($scales['В']) ?>"></div>
                <div class="bar-text-start">01</div>
                <div class="bar-text-end">60</div>
              </div>
            </div>
          </div>
          <div class="item color-blue">
            <p>Your <span>mindfulness</span> level</p>
            <div class="scale">
              <div class="scale-title"><span class="counter" data-text="<?= $scales['З'] ?>">0</span><span class="divider">/</span><small>60</small></div>
              <div class="bar">
                <div class="bar-inner" data-width="<?= calc_data_width($scales['З']) ?>"></div>
                <div class="bar-text-start">01</div>
                <div class="bar-text-end">60</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $product_id = get_field('product_3')['product'];
  $product = new WC_Product($product_id);
  ?>

  <section class="res-new-03">
    <div class="container">
      <div class="row">

        <?php if ($field = get_field('text_3')): ?>
          <div class="col-left"><?= $field ?></div>
        <?php endif ?>

        <div class="col-right">
          <div class="item">

            <?php if ($field = get_field('product_3')['text']): ?>
              <?= $field ?>
            <?php endif ?>

            <div class="price">$<?= $product->regular_price ?></div>
            <a href="#" class="add-to-cart btn" data-result_id="<?= $result_id ?>" data-product_id="<?= $product_id ?>">
              <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#fff" />
              </svg>
              I want it all!
            </a>
            <a href="<?= the_permalink(537) ?>" class="link">I have a gift code</a>
          </div>
          <div class="wrapper">

            <?php $images = get_field('payment_methods_3');
            if($images): ?>

              <div class="payment-methods">

                <?php foreach($images as $index => $image): ?>

                  <figure class="m-0<?= $index + 1 ?>">
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                  </figure>

                <?php endforeach; ?>

              </div>

            <?php endif; ?>

            <p>100% secure <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/secure.svg" alt="" /></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if ($field = get_field('phrase_3')): ?>
    <div class="text-line">
      <div class="marquee">
        <div class="marquee__wrap">
          <div class="marquee__inner">

            <?php for ($i = 1; $i <= 10; $i++) { ?>
              <span><?= $field ?> <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/heart.svg" alt="" /></span>
            <?php } ?>
            
          </div>
        </div>
      </div>
    </div>
  <?php endif ?> 

  <section class="res-new-04">
    <div class="block-wrapper">

      <?php if ($field = get_field('image_4')): ?>
        <div class="image-right">
          <?= wp_get_attachment_image($field['ID'], 'full') ?>
        </div>
      <?php endif ?>
      
      <div class="container">

        <?php if ($field = get_field('title_4')): ?>
          <div class="section-header">
            <?= $field ?>
          </div>
        <?php endif ?>

        <?php if ($field = get_field('text_4')): ?>
          <div class="section-text">
            <?= $field ?>
          </div>
        <?php endif ?>

        <?php if (get_field('bottom_4')): ?>
          <div class="section-bottom">

            <?php if (get_field('bottom_4')['image'] || get_field('bottom_4')['image_mobile']): ?>
            <div class="image">
              <picture>

                <?php if ($field = get_field('bottom_4')['image'] ?: get_field('bottom_4')['image_mobile']): ?>
                <source media="(min-width: 1024px)" srcset="<?= $field['url'] ?>" />
                <?php endif ?>

                <?php if ($field = get_field('bottom_4')['image_mobile'] ?: get_field('bottom_4')['image']): ?>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              <?php endif ?>
              
            </picture>
          </div>
        <?php endif ?>

        <div class="text">

          <?php if (get_field('bottom_4')['list']): ?>
            <ul>

              <?php foreach (get_field('bottom_4')['list'] as $item): ?>
                <li>
                  <span><?= $item['title'] ?></span>
                  <?= $item['text'] ?>
                </li>
              <?php endforeach ?>

            </ul>
          <?php endif ?>
          
          <?php if ($field = get_field('bottom_4')['note']): ?>
            <div class="note"><?= $field ?></div>
          <?php endif ?>
          
        </div>
      </div>
    <?php endif ?>

  </div>
</div>
</section>

<section class="res-new-05">
  <div class="elements">
    <div class="el el-01"></div>
    <div class="el el-02"></div>
    <div class="el el-03"></div>
    <div class="el el-04"></div>
    <div class="el el-05"></div>
  </div>
  <div class="container">

    <?php if ($field = get_field('title_5')): ?>
      <div class="section-header"><?= $field ?></div>
    <?php endif ?>
    
    <?php if ($field = get_field('image_5')): ?>
      <div class="section-image">
        <?= wp_get_attachment_image($field['ID'], 'full') ?>
      </div>
    <?php endif ?>
    
    <?php if (get_field('text_section_5')): ?>
      <div class="section-text">

        <?php if ($field = get_field('text_section_5')['title']): ?>
          <div class="title"><?= $field ?></div>
        <?php endif ?>

        <?php if ($field = get_field('text_section_5')['subtitle']): ?>
          <div class="subtitle"><?= $field ?></div>
        <?php endif ?>

        <?php if ($field = get_field('text_section_5')['text']): ?>
          <?= $field ?>
        <?php endif ?>

      </div>
    <?php endif ?>
    
  </div>
</section>

<?php if(have_rows('lists_6')): ?>

  <section class="res-new-06">
    <div class="elements">
      <div class="el el-01"></div>
      <div class="el el-02"></div>
    </div>
    <div class="container">
      <div class="row">

        <?php while(have_rows('lists_6')): the_row() ?>

          <?php if ($field = get_sub_field('list')): ?>
            <div class="col">
              <div class="item<?php if(get_row_index() % 2 == 0) echo ' item--main' ?>">
                <?= $field ?>
              </div>
            </div>
          <?php endif ?>

        <?php endwhile ?>

      </div>
    </div>
  </section>

<?php endif ?>

<section class="res-new-07">
  <div class="container">
    <div class="row">

      <?php if ($field = get_field('text_7')): ?>
        <div class="col">
          <?= $field ?>
        </div>
      <?php endif ?>
      
      <div class="col">

        <?php if ($field = get_field('image_7')): ?>
          <div class="image">
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          </div>
        <?php endif ?>

        <div class="item">
          <div class="inner">

            <?php if ($field = get_field('product_text_7')): ?>
              <?= $field ?>
            <?php endif ?>

            <div class="price">$<?= $product->regular_price ?></div>
            <a href="#" class="add-to-cart btn" data-result_id="<?= $result_id ?>" data-product_id="<?= $product_id ?>">
              <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#fff" />
              </svg>
              I want it all!
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="res-new-08">
  <div class="elements">
    <div class="el el-01"></div>
    <div class="el el-02"></div>
    <div class="el el-03"></div>
  </div>
  <div class="container">

    <?php if (get_field('text_section_8')): ?>
      <div class="guarantie-block">

        <?php if ($field = get_field('text_section_8')['title']): ?>
          <h2><?= $field ?></h2>
        <?php endif ?>

        <?php if ($field = get_field('text_section_8')['image']): ?>
          <div class="image">
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          </div>
        <?php endif ?>

        <?php if ($field = get_field('text_section_8')['text']): ?>
          <div class="text"><?= $field ?></div>
        <?php endif ?>

      </div>
    <?php endif ?>
    
    <?php if (get_field('reviews_section_8')): ?>
      <div class="reviews-block">

        <?php if ($field = get_field('reviews_section_8')['title']): ?>
          <h2><?= $field ?></h2>
        <?php endif ?>

        <?php if (get_field('reviews_section_8')['reviews']): ?>
          <div class="row">

            <?php foreach (get_field('reviews_section_8')['reviews'] as $item): ?>
              <div class="col">
                <div class="review-item">

                  <?php if ($item['title']): ?>
                    <div class="title"><?= $item['title'] ?></div>
                  <?php endif ?>

                  <div class="review-top">
                    <div class="review-top-main">

                      <?php if ($item['name']): ?>
                        <div class="name"><?= $item['name'] ?></div>
                      <?php endif ?>

                      <?php if ($item['rating']): ?>
                        <div class="rate"><div class="inner" style="width: <?= 20 * $item['rating'] ?>%"></div></div>
                      <?php endif ?>

                    </div>

                    <?php if ($item['date']): ?>
                      <div class="date"><?= $item['date'] ?></div>
                    <?php endif ?>

                  </div>

                  <?php if ($item['text']): ?>
                    <div class="review-body"><?= $item['text'] ?></div>
                  <?php endif ?>

                </div>
              </div>
            <?php endforeach ?>

          </div>
        <?php endif ?>

      </div>
    <?php endif ?>
    
  </div>
</section>

<?php if(have_rows('faq_9')): ?>

  <section class="res-new-09">
    <div class="elements">
      <div class="el el-01"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/elements/landing/el-31.svg" alt="" /></div>
    </div>
    <div class="container">

      <?php if ($field = get_field('title_9')): ?>
        <div class="block-title"><?= $field ?></div>
      <?php endif ?>
      
      <div class="accordion">

        <?php while(have_rows('faq_9')): the_row() ?>

          <div class="item">

            <?php if ($field = get_sub_field('title')): ?>
              <div class="item-header">
                <button>
                  <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.5 0L34.8115 20.1885L55 27.5L34.8115 34.8115L27.5 55L20.1885 34.8115L0 27.5L20.1885 20.1885L27.5 0Z" fill="#0A0517" />
                  </svg>
                  <span><?= $field ?></span>
                </button>
              </div>
            <?php endif ?>
            
            <?php if ($field = get_sub_field('text')): ?>
              <div class="item-body">
                <?= $field ?>
              </div>
            <?php endif ?>
            
          </div>

        <?php endwhile ?>

      </div>
    </div>
  </section>

<?php endif ?>

<section class="res-new-07">
  <div class="container">
    <div class="row">

      <?php if ($field = get_field('text_7')): ?>
        <div class="col">
          <?= $field ?>
        </div>
      <?php endif ?>
      
      <div class="col">

        <?php if ($field = get_field('image_7')): ?>
          <div class="image">
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          </div>
        <?php endif ?>

        <div class="item">
          <div class="inner">

            <?php if ($field = get_field('product_text_7')): ?>
              <?= $field ?>
            <?php endif ?>

            <div class="price">$<?= $product->regular_price ?></div>
            <a href="#" class="add-to-cart btn" data-result_id="<?= $result_id ?>" data-product_id="<?= $product_id ?>">
              <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#fff" />
              </svg>
              I want it all!
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="res-new-10">
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

    <?php if ($field = get_field('feedback_bottom_text', 'option')): ?>        
      <div class="text-center">
        <p><?= $field ?> <span class="code"><?php the_field('code', $result_id) ?></span></p>
        <button class="btn-top">
          Go top
          <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 19L7 1" stroke="white" />
            <path d="M1 7L7 1L13 7" stroke="white" />
          </svg>
        </button>
      </div>
    <?php endif ?>

  </div>
</section>

<?php get_footer() ?>
