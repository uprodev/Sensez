<?php
/*
Template Name: Text page
*/
?>

<?php get_header('empty') ?>

<section class="block-text<?php if(get_field('is_background')) echo ' block-text--primary' ?>">
	<div class="container">
		<div class="logo">
			<a href="<?= get_home_url() ?>">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/<?= get_field('is_background') ? 'logo' : 'logo-blue' ?>.svg" alt="" />
			</a>
		</div>
		<div class="block-text-header">
			<p>
				<?php _e('Effective from', 'Sensez') ?>: <?= get_the_date('F j, Y') ?><br />
				Sensez
			</p>
		</div>
		<h2><?php the_title() ?></h2>
		<?php the_content() ?>
	</div>
</section>

<?php get_footer() ?>