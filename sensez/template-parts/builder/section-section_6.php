<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section fp-noscroll screen screen-06" data-start="#F9F3E9" data-end="#652FEB">
		<div class="elements">

			<?php 
			for ($i = 1; $i <= 5 ; $i++) { ?>
				<div class="el el-0<?= $i ?>">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/star.svg" alt="" />
				</div>
			<?php }	?>
			
		</div>
		<div class="container">
			<div class="progress"><div class="inner"></div></div>
			<div class="steps">
				<span class="step active">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
					</svg>
				</span>
				<span class="step">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
					</svg>
				</span>
				<span class="step">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
					</svg>
				</span>
				<span class="step">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
					</svg>
				</span>
				<span class="step">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
					</svg>
				</span>
				<span class="step">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
					</svg>
				</span>
			</div>

			<div class="row">

				<?php if ($text): ?>
					<div class="col"><?= $text ?></div>
				<?php endif ?>
				
				<?php if ($list): ?>
					<div class="col"><?= $list ?></div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>