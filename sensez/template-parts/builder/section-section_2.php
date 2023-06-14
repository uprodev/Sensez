<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section fp-noscroll screen screen-02 cursor-container" data-start="#F9F3E9" data-end="#F9F3E9">
		<div class="cursor"></div>
		<div class="container">
			<div class="bg"></div>

			<?php if($images): ?>

				<div class="elements">

					<?php foreach($images as $index => $image): ?>

						<div class="el el-0<?= $index + 1 ?>">
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
						</div>

					<?php endforeach; ?>

				</div>

			<?php endif; ?>

			<div class="inner">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
				<?php if ($texts): ?>
					<div class="text-wrapper">

						<?php foreach ($texts as $item): ?>
							<?php if ($item['text']): ?>
								<span<?php if($item['class']) echo ' class="' . $item['class'] . '"'; if($item['tooltip']) echo ' data-tooltip="' . $item['tooltip'] . '"'; ?>><?= $item['text'] ?></span>
							<?php endif ?>
						<?php endforeach ?>

					</div>
				<?php endif ?>
				
				<?php if ($text): ?>
					<?= $text ?>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>