<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section fp-noscroll screen screen-08" data-start="#CBC7F7" data-startmob="#CBC7F7" data-end="#F9F3E9">

		<?php if ($images): ?>
			<div class="elements">

				<?php foreach ($images as $index => $item): ?>

					<?php if ($item['image']): ?>
						<div class="el el-0<?= $index + 1 ?>">
							<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
						</div>
					<?php endif ?>
					
				<?php endforeach ?>

			</div>
		<?php endif ?>
		
		<div class="bg-gradient"></div>

		<?php if ($image): ?>
			<div class="image">
				<div class="inner">
					<?= wp_get_attachment_image($image['ID'], 'full') ?>
				</div>
			</div>
		<?php endif ?>
		
		<div class="container">

			<?php if ($texts): ?>
				
				<?php foreach ($texts as $index => $item): ?>

					<?php if ($item['text']): ?>
						<div class="h1 txt<?= $index + 1 ?>"><div><?= $item['text'] ?></div></div>
					<?php endif ?>
					
				<?php endforeach ?>

			<?php endif ?>

			<?php if ($link): ?>
				<div class="btn-wrapper">
					<a href="<?= $link['url'] ?>" class="btn btn-start btn-start--white"<?php if($link['target']) echo ' target="_blank"' ?>>
						<span class="btn-main">
							<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
							</svg>
							<span><?= $link['title'] ?></span>
						</span>
					</a>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>