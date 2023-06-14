<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section screen screen-07" data-start="#652FEB" data-end="#CBC7F7">

		<?php if($images): ?>

			<div class="elements">

				<?php foreach($images as $index => $item): ?>

					<?php if ($item['image']): ?>
						<div class="el el-0<?= $index + 1 ?>">
							<?= wp_get_attachment_image($image['ID'], 'full') ?>
						</div>
					<?php endif ?>

				<?php endforeach; ?>

			</div>

		<?php endif; ?>

		<?php if ($items): ?>
			<div class="container">
				<div class="accordion">

					<?php foreach ($items as $item): ?>
						<div class="item">

							<?php if ($item['question']): ?>
								<div class="item-header">
									<button>
										<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M27.5 0L34.8115 20.1885L55 27.5L34.8115 34.8115L27.5 55L20.1885 34.8115L0 27.5L20.1885 20.1885L27.5 0Z" fill="#0A0517" />
										</svg>
										<span><?= $item['question'] ?></span>
									</button>
								</div>
							<?php endif ?>
							
							<?php if ($item['answer']): ?>
								<div class="item-body"><?= $item['answer'] ?></div>
							<?php endif ?>
							
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		<?php endif ?>
		
	</section>

	<?php endif; ?>