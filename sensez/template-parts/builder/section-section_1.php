<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section fp-noscroll screen screen-01 cursor-container" data-start="#F9F3E9" data-end="#F9F3E9">
		<div class="cursor"></div>
		<div class="bg"></div>

		<?php if ($images): ?>
			<div class="elements">

				<?php foreach($images as $image): ?>

					<div class="el el-01">
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					</div>

				<?php endforeach; ?>

			</div>
		<?php endif ?>
		
		<div class="container">

			<?php if ($label): ?>
				<p><?= $label ?></p>
			<?php endif ?>
			
			<?php if ($title): ?>
				<h1><?= $title ?></h1>
			<?php endif ?>
			
			<div class="buttons">

				<?php if ($link_1): ?>
					<a href="<?= $link_1['url'] ?>" class="btn btn-start btn-start--white"<?php if($link_1['target']) echo ' target="_blank"' ?>>
						<span class="btn-main">
							<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
							</svg>
							<span><?= $link_1['title'] ?></span>
						</span>
					</a>
				<?php endif ?>

				<?php if ($link_2): ?>
					<a href="<?= $link_2['url'] ?>" class="btn btn-outlined"<?php if($link_2['target']) echo ' target="_blank"' ?>><?= $link_2['title'] ?></a>
				<?php endif ?>
				
			</div>
		</div>
		<button class="btn-scroll">
			<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path class="btn-scroll-bg" d="M25 0L27.5192 2.64148L30.563 0.626802L32.4313 3.76262L35.8471 2.47578L36.9707 5.94871L40.5872 5.45421L40.9099 9.0901L44.5458 9.41276L44.0513 13.0293L47.5242 14.1529L46.2374 17.5687L49.3732 19.437L47.3585 22.4808L50 25L47.3585 27.5192L49.3732 30.563L46.2374 32.4313L47.5242 35.8471L44.0513 36.9707L44.5458 40.5872L40.9099 40.9099L40.5872 44.5458L36.9707 44.0513L35.8471 47.5242L32.4313 46.2374L30.563 49.3732L27.5192 47.3585L25 50L22.4808 47.3585L19.437 49.3732L17.5687 46.2374L14.1529 47.5242L13.0293 44.0513L9.41276 44.5458L9.0901 40.9099L5.45421 40.5872L5.94871 36.9707L2.47578 35.8471L3.76262 32.4313L0.626802 30.563L2.64148 27.5192L0 25L2.64148 22.4808L0.626802 19.437L3.76262 17.5687L2.47578 14.1529L5.94871 13.0293L5.45421 9.41276L9.0901 9.0901L9.41276 5.45421L13.0293 5.94871L14.1529 2.47578L17.5687 3.76262L19.437 0.626802L22.4808 2.64148L25 0Z" fill="#F9F3E9" />
				<path class="btn-scroll-arrow" d="M24.2859 36.8454C24.6726 37.2398 25.3057 37.2461 25.7001 36.8595L32.1268 30.5589C32.5212 30.1723 32.5274 29.5391 32.1408 29.1447C31.7542 28.7504 31.121 28.7441 30.7267 29.1307L25.014 34.7312L19.4135 29.0186C19.0269 28.6242 18.3937 28.618 17.9994 29.0046C17.605 29.3912 17.5987 30.0244 17.9853 30.4187L24.2859 36.8454ZM26 36.1553L26.2294 13.0099L24.2295 12.9901L24 36.1355L26 36.1553Z" fill="#0A0517" />
			</svg>
		</button>

		<?php if ($ticker): ?>
			<div class="text-line">
				<div class="marquee">
					<div class="marquee__wrap">
						<div class="marquee__inner">

							<?php 
							for ($i = 0; $i < 5; $i++) { ?>
								<span><?= $ticker ?> <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/heart.svg" alt="" /></span>
							<?php } 
							?>

						</div>
					</div>
				</div>
			</div>
		<?php endif ?>
		
	</section>

	<?php endif; ?>