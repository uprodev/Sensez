<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="section fp-noscroll screen screen-03" data-start="#F9F3E9" data-end="#652FEB">

		<?php if ($images): ?>
			<div class="lock-wrapper">
				<div class="lock">
					<ul>

						<?php foreach ($images as $index => $image): ?>
							<li id="img0<?= $index + 1 ?>">
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							</li>
						<?php endforeach ?>

					</ul>
				</div>
			</div>
		<?php endif ?>
		
		<?php if ($items): ?>
			<div class="container">
				<div class="screen-headlines">
					<ul>

						<?php foreach ($items as $index => $item): ?>
							<li class="headline-<?= $index + 1 ?>" data-image="img0<?= $index + 1 ?>">

								<?php if ($item['title']): ?>
									<h2><?= $item['title'] ?></h2>
								<?php endif ?>
								
								<?php if ($item['images']): ?>
									<div class="elements">

										<?php foreach ($item['images'] as $index_2 => $item_2): ?>
											<?php if ($item_2['image']): ?>
												<div class="el el-0<?= $index_2 + 1 ?>">
													<?= wp_get_attachment_image($item_2['image']['ID'], 'full') ?>
												</div>
											<?php endif ?>
										<?php endforeach ?>

									</div>
								<?php endif ?>
								
							</li>
						<?php endforeach ?>
						
					</ul>
				</div>
			</div>
		<?php endif ?>
		
	</section>

	<?php endif; ?>