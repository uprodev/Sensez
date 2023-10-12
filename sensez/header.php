<?php get_template_part('parts/head') ?>

<?php if (is_page_template('page-templates/pricing.php')): ?>
  <div class="contact-us">
    <button class="contact-us-close"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-contacts-close.svg" alt="" /></button>
    <span><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-contacts.svg" alt="" /></span>
    <span><?php _e('contact us', 'Sensez') ?></span>
  </div>
<?php else: ?>
  <div class="header">
    <div class="container">

      <?php if ($field = get_field('logo', 'option')): ?>
        <div class="logo">
          <a href="<?= get_home_url() ?>">
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          </a>
        </div>
      <?php endif ?>

      <?php if ($field = get_field('button', 'option')): ?>
        <div class="header-meta">
          <a href="<?= the_permalink(324) ?>" class="btn btn-start btn-start--white"<?php if($field['target']) echo ' target="_blank"' ?> id="start_1">
            <span class="btn-main">
              <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
              </svg>
              <span><?= $field['title'] ?></span>
            </span>
          </a>
        </div>
      <?php endif ?>

    </div>
  </div>
<?php endif ?>

<!-- start content-->
<div class="page-content" id="fullpage">