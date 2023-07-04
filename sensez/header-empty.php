<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="utf-8" />
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="page-wrapper<?php if(is_singular('result')) echo ' page-result'; if(is_page_template('page-templates/registration.php')) echo ' single-screen' ?>">