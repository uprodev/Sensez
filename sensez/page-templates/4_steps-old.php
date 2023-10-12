<?php get_header('empty') ?>

<div class="step-main-wrapper color-blue">
	<div class="test-progress">
		<div class="steps">

			<?php for ($i = 1; $i <= 6 ; $i++) { ?>
				<span class="step">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
					</svg>
				</span>
			<?php } ?>

			<div class="steps-progress"><div class="inner"></div></div>
		</div>
		<button class="btn-previous">
			<svg width="38" height="15" viewBox="0 0 38 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M37 11.7705C30.3354 7.70205 17.857 4.45488 1 10.0833M10.6542 0.464844C9.87826 2.53492 7.33556 7.20864 3.372 9.34295M3.4043 9.27846C5.58829 9.41773 10.6808 10.65 13.5787 14.4648" stroke="white" />
            </svg>
		<?php _e('previous', 'Sensez') ?></button>
		<a href="#" class="btn-next"></a>
	</div>
	<!-- start content-->
	<form action="<?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?>" method="POST" id="test_4_steps" class="page-content">
		<section class="test-screen four-steps-wrapper" data-step="1">
			<div class="four-steps-screen four-steps-relations step-current">
				<div class="elements">

					<?php for ($i = 1; $i <= 5 ; $i++) { ?>
						<div class="el el-0<?= $i ?>">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/star.svg" alt="" />
						</div>
					<?php } ?>
					
				</div>
				<div class="container">
					<div class="row">

						<?php if ($field = get_field('text_1')): ?>
							<div class="col">
								<div class="text"><?= $field ?></div>
							</div>
						<?php endif ?>
						
						<?php 
						$terms = get_terms( [
							'taxonomy' => 'relations',
							'hide_empty' => false,
						] ); 
						?>

						<?php if ($terms): ?>
							<div class="col">
								<ul>

									<?php foreach ($terms as $term): ?>
										<li>
											<label>
												<input type="radio" name="relations" value="<?= $term->term_id ?>"<?php if($term->term_id == $_GET['q']) echo ' checked' ?> />
												<span><?= $term->name ?></span>
											</label>
										</li>
									<?php endforeach ?>
									
								</ul>
							</div>
						<?php endif ?>
						
					</div>
				</div>
			</div>

			<div class="four-steps-screen four-steps-age">
				<div class="elements">
					
					<?php for ($i = 1; $i <= 6 ; $i++) { ?>
						<div class="el el-0<?= $i ?>">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/star.svg" alt="" />
						</div>
					<?php } ?>
					
				</div>

				<?php if ($field = get_field('text_2')): ?>
					<div class="col-text">
						<div class="text"><?= $field ?></div>
					</div>
				<?php endif ?>

				<?php 
				$terms = get_terms( [
					'taxonomy' => 'age',
					'orderby' => 'slug',
					'hide_empty' => false,
				] ); 
				?>

				<?php if ($terms): ?>
					<div class="container">
						<div class="row">
							<div class="col col-list">
								<ul>

									<?php foreach ($terms as $term): ?>
										<li>
											<label>
												<input type="radio" name="age" value="<?= $term->term_id ?>" />
												<span><span><?= $term->name ?></span></span>
											</label>
											<?= term_description($term->term_id) ?>
										</li>
									<?php endforeach ?>

								</ul>
							</div>
						</div>
					</div>
				<?php endif ?>
				
			</div>

			<div class="four-steps-screen four-steps-gender">
				<!-- <button class="btn-previous"><img src="assets/img/icons/previous.svg" alt="" />previous</button> -->

				<div class="elements">
					
					<?php for ($i = 1; $i <= 6 ; $i++) { ?>
						<div class="el el-0<?= $i ?>">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/star.svg" alt="" />
						</div>
					<?php } ?>
					
				</div>

				<div class="container">

					<?php if ($field = get_field('text_3')): ?>
						<div class="text"><?= $field ?></div>
					<?php endif ?>

					<?php 
					$terms = get_terms( [
						'taxonomy' => 'gender',
						'hide_empty' => false,
					] ); 
					?>

					<?php if ($terms): ?>
						<ul>

							<?php foreach ($terms as $term): ?>
								<li>
									<label>
										<input type="radio" name="gender" value="<?= $term->term_id ?>" />
										<span>

											<?php if ($field = get_field('image', 'term_' . $term->term_id)): ?>
												<figure>
													<?= wp_get_attachment_image($field['ID'], 'full') ?>
												</figure>
											<?php endif ?>

											<?= $term->name ?>
										</span>
									</label>
								</li>
							<?php endforeach ?>

						</ul>
					<?php endif ?>
					
				</div>
			</div>

			<div class="four-steps-screen four-steps-orientation">
				<!-- <button class="btn-previous"><img src="assets/img/icons/previous.svg" alt="" />previous</button> -->

				<div class="elements">
					
					<?php for ($i = 1; $i <= 5 ; $i++) { ?>
						<div class="el el-0<?= $i ?>">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/star.svg" alt="" />
						</div>
					<?php } ?>
					
				</div>

				<div class="container">
					
					<?php if ($field = get_field('text_4')): ?>
						<div class="text"><?= $field ?></div>
					<?php endif ?>

					<?php 
					$terms = get_terms( [
						'taxonomy' => 'orientation',
						'hide_empty' => false,
					] ); 
					?>

					<?php if ($terms): ?>
						<ul>

							<?php foreach ($terms as $term): ?>
								<li>
									<label>
										<input type="radio" name="orientation" value="<?= $term->term_id ?>" />
										<span>
											
											<?php if ($field = get_field('image', 'term_' . $term->term_id)): ?>
												<figure>
													<?= wp_get_attachment_image($field['ID'], 'full') ?>
												</figure>
											<?php endif ?>

											<?= $term->name ?>
										</span>
									</label>
								</li>
							<?php endforeach ?>
							
						</ul>
					<?php endif ?>
					
				</div>
			</div>
		</section>
		<input type="hidden" name="action" value="test_4_steps">
	</form>

	<!-- end content-->
</div>

<?php get_footer('empty') ?>