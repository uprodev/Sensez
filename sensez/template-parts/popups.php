<!--<div><a href="#new1" class="fancybox" style="color: #000">Popup 1</a></div>-->
<!--<div><a href="#new2" class="fancybox" style="color: #000">Popup 2</a></div>-->
<!--<div><a href="#new3" class="fancybox" style="color: #000">Popup 3</a></div>-->
<!--<div><a href="#new4" class="fancybox" style="color: #000">Popup 4</a></div>-->

<div class="popup-new popup-new-1" id="new1" style="display: none">

  <?php if( have_rows('background', 'option') ): ?>

    <div class="bg">

      <?php while( have_rows('background', 'option') ): the_row(); ?>

        <?php if ($field = get_sub_field('background_image')): ?>
          <?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => get_row_index() == 1 ? 'bg-1' : 'img img-' . strval(get_row_index() - 1))) ?>
        <?php endif ?>

      <?php endwhile; ?>

    </div>

  <?php endif; ?>

  <div class="popup-main">
    <!-- <div class="close-popup">
      <a href="#" data-fancybox-close><img src="<?= get_stylesheet_directory_uri() ?>/img/v-icon-1.svg" alt="">previous</a>
    </div> -->
    <div class="content">

      <?php if (get_field('image', 'option') || get_field('image_2', 'option')): ?>
      <figure>

        <?php if ($field = get_field('image', 'option')): ?>
          <span class="inner">
            <?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img')) ?>
          </span>
        <?php endif ?>

      </figure>
    <?php endif ?>

    <div class="text-wrap">

      <?php if ($field = get_field('title_first_popup_1', 'option')): ?>
        <p class="title"><?= $field ?></p>
      <?php endif ?>

      <?php if ($field = get_field('title_first_popup_2', 'option')): ?>
        <p class="border"><?= $field ?></p>
      <?php endif ?>

      <?php if ($field = get_field('first_popup_text', 'option')): ?>
        <?= $field ?>
      <?php endif ?>

      <?php if ($field = get_field('first_popup_button', 'option')): ?>
        <div class="btn-wrap">
         <a href="<?= $field['url'] ?>" class="btn-v" data-fancybox-close<?php if($field['target']) echo ' target="_blank"' ?>>
          <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#652FEB" />
          </svg>
          <?= $field['title'] ?>
        </a>
      </div>
    <?php endif ?>

  </div>
</div>
</div>
</div>

<div class="popup-new popup-new-2" id="new2" style="display:none;">

  <?php if( have_rows('background_image', 'option') ): ?>

    <div class="bg">

      <?php while( have_rows('background_image', 'option') ): the_row(); ?>

        <?php if ($field = get_sub_field('second_popup_image')): ?>
          <?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => get_row_index() <= 2 ? 'bg-' . strval(get_row_index()) : 'img img-' . strval(get_row_index() - 2))) ?>
        <?php endif ?>

      <?php endwhile; ?>

    </div>

  <?php endif; ?>

  <div class="popup-main">
    <!-- <div class="close-popup">
      <a href="#" data-fancybox-close><img src="<?= get_stylesheet_directory_uri() ?>/img/v-icon-6.svg" alt="">previous</a>
    </div> -->
    <div class="content">

      <?php if( have_rows('texts', 'option') ): ?>

        <div class="text-left text-border">

          <?php while( have_rows('texts', 'option') ): the_row(); ?>

            <?php if ($field = get_sub_field('short_text')): ?>
              <div class="item item-<?= get_row_index() ?>">
                <p><?= $field ?></p>
              </div>
            <?php endif ?>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>

      <div class="text-center">

        <?php if ($field = get_field('title', 'option')): ?>
          <p class="title"><?= $field ?></p>
        <?php endif ?>
        
        <?php if( have_rows('texts_right', 'option') ): ?>

          <div class="text-border">

            <?php while( have_rows('texts_right', 'option') ): the_row(); ?>

              <?php if ($field = get_sub_field('short_text')): ?>
                <div class="item item-<?= get_row_index() ?>">
                  <p><?= $field ?></p>
                </div>
              <?php endif ?>

            <?php endwhile; ?>

          </div>

        <?php endif; ?>

        <?php if ($field = get_field('second_popup_button', 'option')): ?>
          <div class="btn-wrap">
           <a href="<?= $field['url'] ?>" class="btn-v" data-fancybox-close<?php if($field['target']) echo ' target="_blank"' ?>>
            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F9F3E9" />
            </svg>
            <?= $field['title'] ?>
          </a>
        </div>
      <?php endif ?>

      <?php if ($field = get_field('main_image', 'option')): ?>
        <figure>
          <?= wp_get_attachment_image($field['ID'], 'full') ?>
        </figure>
      <?php endif ?>

    </div>

    <?php if( have_rows('texts_right', 'option') ): ?>

      <div class="text-right text-border">

        <?php while( have_rows('texts_right', 'option') ): the_row(); ?>

          <?php if ($field = get_sub_field('short_text')): ?>
            <div class="item item-<?= get_row_index() ?>">
              <p><?= $field ?></p>
            </div>
          <?php endif ?>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>

  </div>
</div>
</div>

<?php if( have_rows('content', 'option') ): ?>
  <?php while( have_rows('content', 'option') ): the_row(); ?>

   <div class="popup-new popup-new-3" id="new3-<?= strtolower(get_sub_field('gender')) ?>" style="display: none">

    <?php if( have_rows('fourth_popup_background') ): ?>

      <div class="bg">

        <?php while( have_rows('fourth_popup_background') ): the_row(); ?>

          <?php if ($field = get_sub_field('img')): ?>
            <?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img img-' . strval(get_row_index()))) ?>
          <?php endif ?>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>

    <div class="popup-main">
      <!-- <div class="close-popup">
        <a href="#" data-fancybox-close><img src="<?= get_stylesheet_directory_uri() ?>/img/v-icon-8.svg" alt="">previous</a>
      </div> -->
      <div class="content">
        <div class="top">

          <?php if ($field = get_sub_field('fourth_popup_title')): ?>
            <p class="title top-title"><?= $field ?></p>
          <?php endif ?>
          
          <?php if (get_sub_field('fourth_popup_image') || get_sub_field('fourth_popup_image_mobile')): ?>
          <figure>

            <?php if ($field = get_sub_field('fourth_popup_image')): ?>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            <?php endif ?>

            <?php if ($field = get_sub_field('fourth_popup_image_mobile')): ?>
              <?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'mob')) ?>
            <?php endif ?>

          </figure>
        <?php endif ?>

        <div class="text">

          <?php if ($field = get_sub_field('fourth_popup_title')): ?>
            <p class="title"><?= $field ?></p>
          <?php endif ?>
          
          <?php if ($field = get_sub_field('frame_text')): ?>
            <p class="black"><?= $field ?></p>
          <?php endif ?>
          
        </div>
      </div>

      <?php if ($field = get_sub_field('fourth_popup_description')): ?>
        <div class="bottom">
          <?= $field ?>
        </div>
      <?php endif ?>

      <?php if ($field = get_sub_field('button')): ?>
        <div class="btn-wrap">
         <a href="<?= $field['url'] ?>" class="btn-v" data-fancybox-close<?php if($field['target']) echo ' target="_blank"' ?>>
          <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="white" />
          </svg>
          <?= $field['title'] ?>
        </a>
      </div>
    <?php endif ?>

  </div>
</div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<!-- <div class="popup-new popup-new-4" id="new4" style="display: none">

  <?php if( have_rows('third_popup_background_image', 'option') ): ?>

    <div class="bg">

      <?php if ($field = get_field('third_popup_background_image')): ?>
        <?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img img-1')) ?>
      <?php endif ?>

    </div>

  <?php endif; ?>

  <div class="popup-main">
    <div class="content">
      <div class="text">

        <?php if ($field = get_field('third_popup_title', 'option')): ?>
          <p class="title"><?= $field ?></p>
        <?php endif ?>

        <?php if ($field = get_field('third_popup_subtitle', 'option')): ?>
          <p class="sub-title"><?= $field ?></p>
        <?php endif ?>

        <?php if ($field = get_field('third_popup_text', 'option')): ?>
          <?= $field ?>
        <?php endif ?>

        <?php if ($field = get_field('third_popup_button', 'option')): ?>
          <div class="btn-wrap">
           <a href="<?= $field['url'] ?>" class="btn-v" data-fancybox-close<?php if($field['target']) echo ' target="_blank"' ?>>
            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="white" />
            </svg>
            <?= $field['title'] ?>
          </a>
        </div>
      <?php endif ?>

    </div>

    <?php if (get_field('third_image', 'option') || get_field('third_image_2', 'option')): ?>
    <div class="image-wrapper">

      <?php if ($field = get_field('third_image', 'option')): ?>
        <figure>
          <?= wp_get_attachment_image($field['ID'], 'full') ?>
        </figure>
      <?php endif ?>

      <?php if ($field = get_field('third_image_2', 'option')): ?>
        <div class="image-fixed">
          <?= wp_get_attachment_image($field['ID'], 'full') ?>
        </div>
      <?php endif ?>

    </div>
  <?php endif ?>

</div>
</div>
</div> -->




<!--NEW PAGE-->
<!--<div class="wrap-new-page">
  <section class="pricing-banner">
    <div class="bg">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-1-1.svg" alt="" class="img img-1">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-1-2.svg" alt="" class="img img-2">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-1-3.svg" alt="" class="img img-3">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-1-4.svg" alt="" class="img img-4">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-bg-1.svg" alt="" class="bg-1">
    </div>
    <div class="content-width">
      <div class="logo-wrap">
        <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-logo-1.svg" alt="" class="img img-4">
      </div>
      <h1>YOU can do better 😐</h1>
      <p>You have an outstanding sexual potential and the ability to realize it. Right now is your time to flourish and enjoy life. But your strong beliefs or living standards <b> do not seem to take into account your own natural needs, including sexual ones</b>.</p>

      <div class="user-block">
        <figure>
          <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-img-1.svg" alt="">
        </figure>
        <div class="text">
          <p>Phd in Sexology, method author</p>
          <p class="h6">Ann Valensa</p>
        </div>
      </div>

      <p class="sub-title">Ready for Positive Change?</p>
    </div>
    <div class="bottom">
      <p>Our experts prepared a personal sex-guide for you</p>
    </div>
  </section>

  <section class="price-block">
    <div class="bg">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-2-1.svg" alt="" class="img img-1">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-2-2.svg" alt="" class="img img-2">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-2-3.svg" alt="" class="img img-3">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-2-4.svg" alt="" class="img img-4">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-bg-2.png" alt="" class="bg-1">
    </div>
    <div class="content-width">
      <p class="title">Just</p>
      <p class="price">$3.99</p>
      <div class="btn-wrap">
        <a href="#" class="btn-v"><img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-3.svg" alt="">I want it!</a>
      </div>
      <div class="content">
        <p>Including:</p>
        <ul>
          <li>
            <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-4.svg" alt="">
            Expert analysis and <b>insights on your sexuality</b>
          </li>
          <li>
            <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-4.svg" alt="">
            <b>Personal advice</b> how to improve your sex life
          </li>
          <li>
            <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-4.svg" alt="">
            Professional take on your <b>strengths</b> and <b>weaknesses</b>
          </li>
          <li>
            <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-4.svg" alt="">
            Ideas for Experiments to Make <b>You Feel Satisfied</b>
          </li>
        </ul>
      </div>
      <figure>
        <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-img-2.svg" alt="">
      </figure>
    </div>
  </section>

  <section class="user-section">
    <div class="bg">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-5-1.svg" alt="" class="img img-1">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-5-2.svg" alt="" class="img img-2">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-5-3.svg" alt="" class="img img-3">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-5-4.svg" alt="" class="img img-4">
    </div>
    <div class="content-width">
      <div class="content">
        <figure>
          <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-img-3.svg" alt="">
        </figure>
        <div class="text">
          <p class="title">25 818 </p>
          <p>satisfied users last month</p>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="bg">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-6-1.svg" alt="" class="img img-1">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-icon-6-2.svg" alt="" class="img img-2">
      <img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-bg-3.svg" alt="" class="bg-1">
    </div>
    <div class="content-width">
      <p class="top">Reviews</p>
      <div class="slider-wrap">
        <div class="swiper testimonials-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <p class="h3">I cannot express how much Sensez's
                tools have improved my relationships
                and my overall quality of life.</p>
              <p class="name">Jessica, 24</p>
            </div>
            <div class="swiper-slide">
              <p class="h3">I cannot express how much Sensez's
                tools have improved my relationships
                and my overall quality of life.</p>
              <p class="name">Jessica, 24</p>
            </div>

          </div>
        </div>
        <div class="nav-wrap">
          <div class="swiper-button-prev testimonials-prev"><img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-img-4-1.png" alt="" ></div>
          <div class="swiper-button-next testimonials-next"><img src="https://dev.sensez.co/wp-content/themes/sensez/assets/img/p-img-4-2.png" alt="" ></div>
        </div>
      </div>
    </div>
  </section>
</div>-->

<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>-->

  <script>
    jQuery(document).ready(function ($) {
      $(".fancybox").fancybox({
        touch:false,
        autoFocus:false,
      });

    /*var swiperTestimonials = new Swiper(".testimonials-slider", {
      navigation: {
        nextEl: ".testimonials-next",
        prevEl: ".testimonials-prev",
      },
    });*/
    })

  </script>
