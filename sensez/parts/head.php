<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="utf-8" />
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="facebook-domain-verification" content="h27wmknjot152z0j5tto257f5dkpin" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLJJBQC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php if (!is_page_template('page-templates/text.php')): ?>
    <div class="page-wrapper<?php if(is_singular('result')) echo ' page-result'; if(is_page_template('page-templates/pricing.php')) echo ' overflow-normal'; if(is_page_template('page-templates/registration.php') || is_page_template('page-templates/checkout.php') || is_page_template('page-templates/gift-form.php') || is_page_template('page-templates/gift-submit.php') || is_page_template('page-templates/gift-success.php')) echo ' single-screen' ?>">
      <?php endif ?>