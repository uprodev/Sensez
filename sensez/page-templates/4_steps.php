<?php
/*
Template Name: 4 steps
*/
?>

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

					<div class="btn-next-wrapper">
						<button type="button" class="btn btn-start btn-start--white">
							<span class="btn-main">
								<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#0A0517"></path>
								</svg>
								<span><?php _e('Next', 'Sensez') ?></span>
							</span>
						</button>
					</div>

				</div>
			</section>
			<input type="hidden" name="action" value="test_4_steps">
		</form>

		<!-- end content-->
	</div>

	<?php get_footer('empty') ?>