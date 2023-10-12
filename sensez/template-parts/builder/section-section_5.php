<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section screen screen-05" data-start="#949AF6" data-end="#F9F3E9">
		<div class="elements">

			<?php 
			for ($i = 1; $i <= 4 ; $i++) { ?>
				<div class="el el-0<?= $i ?>">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/star-blue.svg" alt="" />
				</div>
			<?php }	?>
			
		</div>
		<div class="container">

			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>
			
			<?php if ($items): ?>
				<div class="cards">
					<div class="row">

						<?php foreach ($items as $item): ?>

							<?php if ($item['text']): ?>
								<div class="col">
									<a href="<?php the_permalink(324) ?>" class="card">
										<p><?= $item['text'] ?></p>
									</a>
								</div>
							<?php endif ?>
							
						<?php endforeach ?>
						
					</div>
				</div>
			<?php endif ?>
			
			<?php if ($image || $mobile_image): ?>
				<div class="image">
					<picture><source media="(min-width: 768px)" srcset="<?= $image['url'] ?: $mobile_image['url'] ?>" />
						<?= $mobile_image ? wp_get_attachment_image($mobile_image['ID'], 'full') : wp_get_attachment_image($image['ID'], 'full') ?>
					</picture>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>