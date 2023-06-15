<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section fp-noscroll screen screen-04 cursor-container" data-start="#652FEB" data-end="#949AF6">
		<div class="cursor"></div>

		<?php if ($images): ?>
			<div class="elements">

				<?php foreach ($images as $index => $image): ?>
					<div class="el el-0<?= $index ?>">
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					</div>
				<?php endforeach ?>

			</div>
		<?php endif ?>
		
		<div class="inner">

			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>
			
			<?php if ($items): ?>
				<div class="screen-04-animation">

					<?php foreach ($items as $index => $item): ?>
						<div class="box box-0<?= $index + 1 ?>">

							<?php if ($item['text']): ?>
								<div class="text text-0<?= $index + 1 ?>"><?= $item['text'] ?></div>
							<?php endif ?>
							
							<?php if ($item['svg']): ?>
								<div class="line line-0<?= $index + 1 ?>"><?= $item['svg'] ?></div>
							<?php endif ?>
							
						</div>
					<?php endforeach ?>
					
				</div>
			<?php endif ?>
			
			<?php if ($link): ?>
				<div class="btn-wrapper">
					<a href="<?= $link['url'] ?>" class="btn btn-black"<?php if($link['target']) echo ' target="_blank"' ?>>
						<span><?= $link['title'] ?></span>
					</a>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>