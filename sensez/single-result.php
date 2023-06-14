<?php get_header('empty') ?>

<?php $profile_id = get_field('profile') ?>

<div class="contact-us">
    <button class="contact-us-close"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-contacts-close.svg" alt="" /></button>
    <span><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-contacts.svg" alt="" /></span>
    <span><?php _e('contact us', 'Sensez') ?></span>
</div>
<div class="page-content" id="fullpage">
    <section class="section fp-noscroll screen res-screen-01 res-orange" data-bg="#F9F3E9">
      <div class="elements">
        <div class="el el-01"></div>
        <div class="el el-02"></div>
        <div class="el el-03"></div>
        <div class="el el-04"></div>
    </div>
    <div class="container">

        <?php if ($field = get_field('logo', 'option')): ?>
            <div class="logo">
                <a href="<?= get_home_url() ?>">
                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                </a>
            </div> 
        <?php endif ?>

        <div class="subtitle"><?php _e('Your primary sexuality strength is', 'Sensez') ?></div>

        <?php if ($field = get_field('primary', $profile_id)): ?>
            <h1><?= $field ?></h1>
        <?php endif ?>
        
        <?php if ($field = get_field('percent', $profile_id)): ?>
            <p><?= $field ?></p>
        <?php endif ?>

        <div class="graph">
            <a href="#" class="btn-share"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/share.svg" alt="" /></a>
            <svg class="graph-main graph-main--desktop" width="1238" height="400" viewBox="0 0 1238 400">
                <path class="path" fill="url(#paint2_linear_1526_19835)" stroke="url(#paint3_linear_1526_19835)" stroke-width="2" />
                <path class="path" fill="url(#paint0_linear_1526_19835)" stroke="url(#paint1_linear_1526_19835)" stroke-width="2" />
                <path class="path" fill="url(#paint4_linear_1526_19835)" stroke="url(#paint5_linear_1526_19835)" stroke-width="2" />
                <path class="path" fill="url(#paint6_linear_1526_19835)" stroke="url(#paint7_linear_1526_19835)" stroke-width="2" />

                <text class="path-title path-title--energy"><?php _e('Energy', 'Sensez') ?></text>
                <text class="path-title path-title--passion"><?php _e('Passion', 'Sensez') ?></text>
                <text class="path-title path-title--regulation"><?php _e('Self-Regulation', 'Sensez') ?></text>
                <text class="path-title path-title--mindfulness"><?php _e('Mindfulness', 'Sensez') ?></text>

                <g class="dots-box dots-0">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>
                <g class="dots-box dots-1">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>
                <g class="dots-box dots-2">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>
                <g class="dots-box dots-3">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>

                <defs>
                    <linearGradient id="paint0_linear_1526_19835" x1="423.792" y1="34.1818" x2="423.792" y2="422" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FE5122" />
                        <stop offset="1" stop-color="#FE5122" stop-opacity="0.25" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_1526_19835" x1="423.792" y1="34.1818" x2="423.792" y2="422" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FE5122" />
                        <stop offset="1" stop-color="#FE5122" stop-opacity="0.19" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_1526_19835" x1="176.032" y1="15" x2="176.032" y2="422" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFB0D0" />
                        <stop offset="1" stop-color="#FFB0D0" stop-opacity="0.34" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_1526_19835" x1="176.032" y1="15" x2="176.032" y2="422" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFB0D0" />
                        <stop offset="1" stop-color="#FFB0D0" stop-opacity="0.22" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_1526_19835" x1="668.242" y1="-38.4971" x2="668.242" y2="422" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDAB96" />
                        <stop offset="0.0001" stop-color="#FFC158" />
                        <stop offset="1" stop-color="#FFC158" stop-opacity="0.25" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_1526_19835" x1="668.242" y1="-38.4971" x2="668.242" y2="422" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFC158" />
                        <stop offset="1" stop-color="#FFC158" stop-opacity="0.5" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_1526_19835" x1="931.067" y1="-14.4612" x2="931.067" y2="446.495" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#949AF6" />
                        <stop offset="1" stop-color="#949AF6" stop-opacity="0.36" />
                    </linearGradient>
                    <linearGradient id="paint7_linear_1526_19835" x1="931.067" y1="-14.4612" x2="931.067" y2="422" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#949AF6" />
                        <stop offset="1" stop-color="#949AF6" stop-opacity="0.54" />
                    </linearGradient>
                </defs>
            </svg>
            <svg class="graph-main graph-main--mobile" width="326" height="200" viewBox="0 0 326 200">
                <path class="path" fill="url(#paint0_linear_1965_11654)" stroke="url(#paint1_linear_1965_11654)" stroke-width="1" />
                <path class="path" fill="url(#paint2_linear_1965_11654)" stroke="url(#paint3_linear_1965_11654)" stroke-width="1" />
                <path class="path" fill="url(#paint4_linear_1965_11654)" stroke="url(#paint5_linear_1965_11654)" stroke-width="1" />
                <path class="path" fill="url(#paint6_linear_1965_11654)" stroke="url(#paint7_linear_1965_11654)" stroke-width="1" />

                <text class="path-title"><?php _e('Energy', 'Sensez') ?></text>
                <text class="path-title"><?php _e('Passion', 'Sensez') ?></text>
                <text class="path-title"><?php _e('Self-Regulation', 'Sensez') ?></text>
                <text class="path-title"><?php _e('Mindfulness', 'Sensez') ?></text>

                <g class="dots-0">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>
                <g class="dots-1">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>
                <g class="dots-2">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>
                <g class="dots-3">
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                    <path class="path-dot" fill="#0A0517" />
                </g>

                <defs>
                    <linearGradient id="paint0_linear_1965_11654" x1="126.178" y1="4.02141" x2="126.178" y2="216.025" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FE5122" />
                        <stop offset="1" stop-color="#FE5122" stop-opacity="0.25" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_1965_11654" x1="126.178" y1="4.02141" x2="126.178" y2="216.025" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FE5122" />
                        <stop offset="1" stop-color="#FE5122" stop-opacity="0.19" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_1965_11654" x1="51.7164" y1="-6.56235" x2="51.7164" y2="216" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFB0D0" />
                        <stop offset="1" stop-color="#FFB0D0" stop-opacity="0.34" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_1965_11654" x1="51.7164" y1="-6.56235" x2="51.7164" y2="216" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFB0D0" />
                        <stop offset="1" stop-color="#FFB0D0" stop-opacity="0.22" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_1965_11654" x1="198.265" y1="-37.1518" x2="198.265" y2="216.001" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FDAB96" />
                        <stop offset="0.0001" stop-color="#FFC158" />
                        <stop offset="1" stop-color="#FFC158" stop-opacity="0.25" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_1965_11654" x1="198.265" y1="-37.1518" x2="198.265" y2="216.001" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFC158" />
                        <stop offset="1" stop-color="#FFC158" stop-opacity="0.5" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_1965_11654" x1="275.242" y1="-22.0595" x2="275.242" y2="229.361" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#949AF6" />
                        <stop offset="1" stop-color="#949AF6" stop-opacity="0.36" />
                    </linearGradient>
                    <linearGradient id="paint7_linear_1965_11654" x1="275.242" y1="-22.0596" x2="275.242" y2="216" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#949AF6" />
                        <stop offset="1" stop-color="#949AF6" stop-opacity="0.54" />
                    </linearGradient>
                </defs>
            </svg>
            <svg class="graph-scale" width="1238" height="425" viewBox="0 0 1238 425" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 12L1.11325 17L6.88675 17L4 12ZM3.5 16.5L3.50002 424L4.50002 424L4.5 16.5L3.5 16.5Z" fill="#0A0517" />
                <circle cx="4" cy="61.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="97.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="133.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="169.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="205.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="241.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="277.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="313.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="349.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="385.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="4" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="69" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="134" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="199" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="264" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="329" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="394" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="459" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="524" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="589" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="654" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="719" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="784" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="849" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="914" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="979" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="1044" cy="421.75" r="3" fill="#0A0517" />
                <circle cx="1109" cy="421.75" r="3" fill="#0A0517" />
                <path d="M1194 421.75L1189 418.863V424.637L1194 421.75ZM5 422.25L1189.5 422.25V421.25L5 421.25V422.25Z" fill="#0A0517" />
            </svg>
            <svg class="graph-scale-mobile" width="338" height="228" viewBox="0 0 338 228" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 0L0.113249 5L5.88675 5L3 0ZM2.5 4.5L2.50001 225.726L3.50001 225.726L3.5 4.5L2.5 4.5Z" fill="#0A0517" />
                <circle cx="3" cy="25" r="2" fill="#0A0517" />
                <circle cx="3" cy="45" r="2" fill="#0A0517" />
                <circle cx="3" cy="65" r="2" fill="#0A0517" />
                <circle cx="3" cy="85" r="2" fill="#0A0517" />
                <circle cx="3" cy="105" r="2" fill="#0A0517" />
                <circle cx="3" cy="125" r="2" fill="#0A0517" />
                <circle cx="3" cy="145" r="2" fill="#0A0517" />
                <circle cx="3" cy="165" r="2" fill="#0A0517" />
                <circle cx="3" cy="185" r="2" fill="#0A0517" />
                <circle cx="3" cy="205" r="2" fill="#0A0517" />
                <circle cx="3" cy="225" r="2" fill="#0A0517" />
                <circle cx="3" cy="225" r="2" fill="#0A0517" />
                <circle cx="22" cy="225" r="2" fill="#0A0517" />
                <circle cx="41" cy="225" r="2" fill="#0A0517" />
                <circle cx="60" cy="225" r="2" fill="#0A0517" />
                <circle cx="79" cy="225" r="2" fill="#0A0517" />
                <circle cx="98" cy="225" r="2" fill="#0A0517" />
                <circle cx="117" cy="225" r="2" fill="#0A0517" />
                <circle cx="136" cy="225" r="2" fill="#0A0517" />
                <circle cx="155" cy="225" r="2" fill="#0A0517" />
                <circle cx="174" cy="225" r="2" fill="#0A0517" />
                <circle cx="193" cy="225" r="2" fill="#0A0517" />
                <circle cx="212" cy="225" r="2" fill="#0A0517" />
                <circle cx="231" cy="225" r="2" fill="#0A0517" />
                <circle cx="250" cy="225" r="2" fill="#0A0517" />
                <circle cx="269" cy="225" r="2" fill="#0A0517" />
                <circle cx="288" cy="225" r="2" fill="#0A0517" />
                <circle cx="307" cy="225" r="2" fill="#0A0517" />
                <circle cx="326" cy="225" r="2" fill="#0A0517" />
                <path d="M338 224.998L332.999 222.114L333.001 227.888L338 224.998ZM2.00022 225.687L333.5 225.501L333.5 224.501L1.99978 224.688L2.00022 225.687Z" fill="#0A0517" />
            </svg>

            <div class="legend">
                <ul>
                    <li><?php _e('Energy', 'Sensez') ?></li>
                    <li><?php _e('Passion', 'Sensez') ?></li>
                    <li><?php _e('Self-Regulation', 'Sensez') ?></li>
                    <li><?php _e('Mindfulness', 'Sensez') ?></li>
                </ul>
            </div>
        </div>

        <div class="buttons">
          <a href="#" class="btn btn-outlined">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 7.18561L12.91 0V4.45282C12.5175 4.49498 12.1249 4.54774 11.7325 4.59343C10.7155 4.76679 9.71898 5.04613 8.75892 5.42722C6.82634 6.22049 5.07009 7.39725 3.59343 8.88816C2.13606 10.3398 1.06118 12.1379 0.46705 14.1185C-0.0602951 15.982 -0.142385 17.9459 0.227456 19.8481C0.24467 19.9225 0.302823 19.9802 0.376796 19.996C0.425645 20.0063 0.47659 19.9964 0.518227 19.9689C0.559866 19.9411 0.588944 19.8978 0.598948 19.8481C0.916237 18.1383 1.56175 16.5084 2.49919 15.0505C3.36939 13.7206 4.54461 12.6235 5.92427 11.8533C7.26599 11.1286 8.72473 10.6521 10.2319 10.4465C10.9753 10.3233 11.722 10.2248 12.4794 10.1476L12.9102 10.109L12.91 14.3575L20 7.18561Z" fill="#652FEB" />
          </svg>
          <?php _e('Share', 'Sensez') ?>
      </a>
      <button class="btn-scroll">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="btn-scroll-bg" d="M25 0L27.5192 2.64148L30.563 0.626802L32.4313 3.76262L35.8471 2.47578L36.9707 5.94871L40.5872 5.45421L40.9099 9.0901L44.5458 9.41276L44.0513 13.0293L47.5242 14.1529L46.2374 17.5687L49.3732 19.437L47.3585 22.4808L50 25L47.3585 27.5192L49.3732 30.563L46.2374 32.4313L47.5242 35.8471L44.0513 36.9707L44.5458 40.5872L40.9099 40.9099L40.5872 44.5458L36.9707 44.0513L35.8471 47.5242L32.4313 46.2374L30.563 49.3732L27.5192 47.3585L25 50L22.4808 47.3585L19.437 49.3732L17.5687 46.2374L14.1529 47.5242L13.0293 44.0513L9.41276 44.5458L9.0901 40.9099L5.45421 40.5872L5.94871 36.9707L2.47578 35.8471L3.76262 32.4313L0.626802 30.563L2.64148 27.5192L0 25L2.64148 22.4808L0.626802 19.437L3.76262 17.5687L2.47578 14.1529L5.94871 13.0293L5.45421 9.41276L9.0901 9.0901L9.41276 5.45421L13.0293 5.94871L14.1529 2.47578L17.5687 3.76262L19.437 0.626802L22.4808 2.64148L25 0Z" fill="#652FEB" />
          <path class="btn-scroll-arrow" d="M24.2859 36.8454C24.6726 37.2398 25.3057 37.2461 25.7001 36.8595L32.1268 30.5589C32.5212 30.1723 32.5274 29.5391 32.1408 29.1447C31.7542 28.7504 31.121 28.7441 30.7267 29.1307L25.014 34.7312L19.4135 29.0186C19.0269 28.6242 18.3937 28.618 17.9994 29.0046C17.605 29.3912 17.5987 30.0244 17.9853 30.4187L24.2859 36.8454ZM26 36.1553L26.2294 13.0099L24.2295 12.9901L24 36.1355L26 36.1553Z" fill="#fff" />
      </svg>
  </button>
</div>
</div>
</section>

<section class="section screen res-screen-02" data-bg="#949AF6">
    <div class="container">
        <div class="block-scroll block-inner block-first">
            <div class="wrapper">
                <div class="image">
                    <picture>

                        <?php if ($field = get_field('img_description', $profile_id)): ?>
                         <source media="(min-width: 768px)" srcset="<?= $field['url'] ?>" /> 
                         <?php endif ?>

                         <?php if ($field = get_field('img_description_mobile', $profile_id)): ?>
                            <?= wp_get_attachment_image($field['ID'], 'full') ?>
                        <?php endif ?>
                        
                    </picture>
                </div>

                <?php if ($field = get_field('description', $profile_id)): ?>
                    <div class="text"><?= $field ?></div>
                <?php endif ?>
                
            </div>
        </div>

        <div class="block-scroll block-scales">
            <h2><?php _e('Your resource distribution chart', 'Sensez') ?></h2>
            <div class="wrapper">

                <?php if ($field = get_field('energy_level', $profile_id)): ?>
                    <div class="item">
                        <p><?php _e('Your energy level', 'Sensez') ?> <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/question.svg" alt="" /></p>
                        <div class="scale color-pink">
                            <div class="scale-title"><span class="counter"><?= $field ?></span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                                <div class="bar-inner" data-width="66.66"></div>
                                <div class="bar-text-start">01</div>
                                <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                
                <?php if ($field = get_field('sexuality_level', $profile_id)): ?>
                    <div class="item">
                        <p><?php _e('Your sexuality level', 'Sensez') ?> <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/question.svg" alt="" /></p>
                        <div class="scale color-orange">
                            <div class="scale-title"><span class="counter"><?= $field ?></span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                                <div class="bar-inner" data-width="48.33"></div>
                                <div class="bar-text-start">01</div>
                                <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                
                <?php if ($field = get_field('self_regulation_level', $profile_id)): ?>
                    <div class="item">
                        <p><?php _e('Your self-regulation level', 'Sensez') ?> <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/question.svg" alt="" /></p>
                        <div class="scale color-yellow">
                            <div class="scale-title"><span class="counter"><?= $field ?></span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                                <div class="bar-inner" data-width="100"></div>
                                <div class="bar-text-start">01</div>
                                <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

                <?php if ($field = get_field('mindfulness_level', $profile_id)): ?>
                    <div class="item">
                        <p><?php _e('Your mindfulness level', 'Sensez') ?> <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/question.svg" alt="" /></p>
                        <div class="scale color-blue">
                            <div class="scale-title"><span class="counter"><?= $field ?></span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                                <div class="bar-inner" data-width="36.66"></div>
                                <div class="bar-text-start">01</div>
                                <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                
            </div>
        </div>

        <?php if( have_rows('texts_basic', $profile_id) ): ?>
            <?php while( have_rows('texts_basic', $profile_id) ): the_row(); ?>

                <div class="block-scroll block-inner<?php if(get_row_index() % 2 == 0) echo ' img-right'; if(get_sub_field('is_bottom_element')) echo ' block-inner--has-element' ?>">
                    <div class="wrapper">

                        <?php if ($field = get_sub_field('image')): ?>
                            <div class="image">
                                <?= wp_get_attachment_image($field['ID'], 'full') ?>
                            </div> 
                        <?php endif ?>

                        <div class="text">

                            <?php if ($field = get_sub_field('title')): ?>
                                <h3><?= $field ?></h3>
                            <?php endif ?>

                            <?php if ($field = get_sub_field('image_mobile')): ?>
                                <div class="image-mobile">
                                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                                </div> 
                            <?php endif ?>

                            <?php if ($field = get_sub_field('text')): ?>
                                <?= $field ?>
                            <?php endif ?>

                        </div>
                    </div>

                    <?php if (($field = get_sub_field('element_text')) && get_sub_field('is_bottom_element')): ?>
                    <div class="element element-<?= get_sub_field('element_direction') ?>"><?= $field ?></div>
                <?php endif ?>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>

</div>
</section>

<section class="section screen res-screen-02" data-bg="#FDAB96">
  <div class="container">

    <?php if( have_rows('texts_advanced', $profile_id) ): ?>
        <?php while( have_rows('texts_advanced', $profile_id) ): the_row(); ?>

            <div class="block-scroll block-inner<?php if(get_row_index() % 2 == 1) echo ' img-right'; if(get_sub_field('is_bottom_element')) echo ' block-inner--has-element' ?>">
                <div class="wrapper">

                    <?php if ($field = get_sub_field('image')): ?>
                        <div class="image">
                            <?= wp_get_attachment_image($field['ID'], 'full') ?>
                        </div> 
                    <?php endif ?>

                    <div class="text">

                        <?php if ($field = get_sub_field('title')): ?>
                            <h3><?= $field ?></h3>
                        <?php endif ?>

                        <?php if ($field = get_sub_field('image_mobile')): ?>
                            <div class="image-mobile">
                                <?= wp_get_attachment_image($field['ID'], 'full') ?>
                            </div> 
                        <?php endif ?>

                        <?php if ($field = get_sub_field('text')): ?>
                            <?= $field ?>
                        <?php endif ?>

                    </div>
                </div>

                <?php if (($field = get_sub_field('element_text')) && get_sub_field('is_bottom_element')): ?>
                <div class="element<?php if(get_sub_field('element_direction') == 'Right') echo ' element-right' ?>"><?= $field ?></div>
            <?php endif ?>

        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('two_columns_advanced', $profile_id) ): ?>

    <div class="block-scroll block-inner block-two-col">
        <div class="wrapper">

            <?php while( have_rows('two_columns_advanced', $profile_id) ): the_row(); ?>

                <?php if ($field = get_sub_field('text')): ?>
                    <div class="col">
                        <div class="col-inner"><?= $field ?></div>
                    </div>
                <?php endif ?>     

            <?php endwhile; ?>

        </div>
    </div>

<?php endif; ?>

</div>
</section>

<?php if( have_rows('recommendations', $profile_id) ): ?>

    <section class="section res-screen-10">
        <div class="container">
            <h2><?php _e('Recommendations', 'Sensez') ?>:</h2>

            <?php while( have_rows('recommendations', $profile_id) ): the_row(); ?>

                <div class="recommendation<?php if(get_sub_field('color')) echo ' color-' . get_sub_field('color') ?>">
                    <div class="block-header">

                        <?php if ($field = get_sub_field('title')): ?>
                            <div class="title"><?= $field ?></div>
                        <?php endif ?>
                        
                        <div class="tip"><?php _e('tip', 'Sensez') ?><br />#<?php if(get_row_index() <= 9) echo '0'; echo get_row_index() ?></div>
                        </div>
                        <div class="block-main">

                            <?php if ($field = get_sub_field('subtitle')): ?>
                                <div class="headline"><?= $field ?></div>
                            <?php endif ?>

                            <?php if ($field = get_sub_field('image')): ?>
                                <div class="image">
                                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                                </div>
                            <?php endif ?>

                            <?php if ($field = get_sub_field('text')): ?>
                                <div class="text"><?= $field ?></div>
                            <?php endif ?>

                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </section>

    <?php endif; ?>

    <?php if (get_field('gift', 'option')): ?>
        <section class="section res-screen-06">
            <div class="container">
                <div class="wrapper">
                    <div class="text">

                        <?php if ($field = get_field('gift', 'option')['title']): ?>
                            <h2><?= $field ?></h2>
                        <?php endif ?>

                        <div class="share">
                            <?php if ($field = get_field('gift', 'option')['text']): ?>
                                <?= $field ?>
                            <?php endif ?>

                            <a href="https://telegram.me/share/url?url=<?php the_permalink() ?>" target="_blank">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.616 6.01063C7.82401 9.31334 0.543582 12.0793 0.437286 12.1572C-0.0178353 12.4906 -0.141973 13.2253 0.180468 13.6774C0.355032 13.9221 1.49231 14.497 8.42028 17.8423L13.6482 20.3667L16.2809 25.8216C19.7354 32.9795 20.0785 33.6577 20.3405 33.8464C20.4916 33.9551 20.6724 34 20.9587 34C21.4109 34 21.7 33.8378 21.917 33.4625C22.1499 33.0596 34 1.33462 34 1.11402C34 0.543765 33.4258 -0.0124225 32.8501 0.000211217C32.7133 0.00323727 25.408 2.70792 16.616 6.01063ZM21.2723 11.1043L14.2529 18.1286L9.1571 15.6688C6.35439 14.3159 4.08106 13.189 4.10525 13.1647C4.15764 13.1118 28.107 4.09347 28.2163 4.08545C28.2578 4.08243 25.1331 7.24087 21.2723 11.1043ZM25.4093 17.817C22.9297 24.4292 20.877 29.866 20.8477 29.8987C20.8183 29.9315 20.1169 28.5532 19.2889 26.8359C18.4609 25.1185 17.3537 22.8279 16.8284 21.7456L15.8733 19.7776L22.8733 12.764C26.7233 8.90656 29.8833 5.76037 29.8954 5.77263C29.9076 5.78481 27.8889 11.2048 25.4093 17.817Z"
                                    fill="white"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <figure>
                            <picture>

                                <?php if ($field = get_field('gift', 'option')['image']): ?><source media="(min-width: 768px)" srcset="<?= $field['url'] ?>" /><?php endif ?>

                                <?php if ($field = get_field('gift', 'option')['image_mobile']): ?>
                                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                                <?php endif ?>

                            </picture>
                        </figure>

                        <?php if ($field = get_field('gift', 'option')['price']): ?>
                            <div class="price"><?= $field ?></div>
                        <?php endif ?>

                        <?php if ($field = get_field('gift', 'option')['link']): ?>
                            <a href="<?= $field['url'] ?>" class="btn btn-outlined"<?php if($field['target']) echo ' target="_blank"' ?>>
                                <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                                </svg>
                                <?= $field['title'] ?>
                            </a>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>

    <?php if (get_field('share_results', 'option')): ?>
        <section class="section res-screen-08">
            <div class="container">

                <?php if ($field = get_field('share_results', 'option')['title']): ?>
                    <h2><?= $field ?></h2>
                <?php endif ?>

                <div class="wrapper">

                    <?php if (get_field('share_results', 'option')['copy']): ?>
                        <a href="#" onclick="copyText()" class="btn-share share-copy">
                            <div class="inner">
                                <svg width="259" height="259" viewBox="0 0 259 259" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M129.5 0L146.922 19.5011L169.518 6.33818L180.061 30.2686L205.618 24.7323L208.25 50.7495L234.268 53.3818L228.731 78.9391L252.662 89.4823L239.499 112.078L259 129.5L239.499 146.922L252.662 169.518L228.731 180.061L234.268 205.618L208.25 208.25L205.618 234.268L180.061 228.731L169.518 252.662L146.922 239.499L129.5 259L112.078 239.499L89.4823 252.662L78.9391 228.731L53.3818 234.268L50.7495 208.25L24.7323 205.618L30.2686 180.061L6.33818 169.518L19.5011 146.922L0 129.5L19.5011 112.078L6.33818 89.4823L30.2686 78.9391L24.7323 53.3818L50.7495 50.7495L53.3818 24.7323L78.9391 30.2686L89.4823 6.33818L112.078 19.5011L129.5 0Z" fill="#0A0517" />
                                </svg>
                                <span class="text"><?php _e('copy', 'Sensez') ?></span>
                            </div>
                        </a>
                        <script>
                            function copyText() {navigator.clipboard.writeText("<?php the_permalink() ?>");}
                        </script>
                    <?php endif ?>

                    <?php if (get_field('share_results', 'option')['instagram']): ?>
                        <a href="#" class="btn-share share-inst" target="_blank"><?php _e('Instagram', 'Sensez') ?></a>
                    <?php endif ?>

                    <?php if (get_field('share_results', 'option')['reddit']): ?>
                        <a href="http://www.reddit.com/submit?url=<?php the_permalink() ?>" class="btn-share share-reddit" target="_blank"><?php _e('reddit', 'Sensez') ?></a>
                    <?php endif ?>

                    <?php if (get_field('share_results', 'option')['snapchat']): ?>
                        <a href="#" class="btn-share share-snapchat" target="_blank"><?php _e('snapchat', 'Sensez') ?></a>
                    <?php endif ?>


                    <?php if (get_field('share_results', 'option')['twitter']): ?>
                        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" class="btn-share share-twitter" target="_blank">
                            <div class="inner">
                              <svg width="315" height="315" viewBox="0 0 315 315" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M157.5 0L178.689 23.7176L206.17 7.7086L218.993 36.8132L250.076 30.0798L253.278 61.7224L284.92 64.9238L278.187 96.007L307.291 108.83L291.282 136.311L315 157.5L291.282 178.689L307.291 206.17L278.187 218.993L284.92 250.076L253.278 253.278L250.076 284.92L218.993 278.187L206.17 307.291L178.689 291.282L157.5 315L136.311 291.282L108.83 307.291L96.007 278.187L64.9238 284.92L61.7224 253.278L30.0798 250.076L36.8132 218.993L7.7086 206.17L23.7176 178.689L0 157.5L23.7176 136.311L7.7086 108.83L36.8132 96.007L30.0798 64.9238L61.7224 61.7224L64.9238 30.0798L96.007 36.8132L108.83 7.7086L136.311 23.7176L157.5 0Z" fill="#CBC7F7" />
                            </svg>
                            <span class="text"><?php _e('twitter', 'Sensez') ?></span>
                        </div>
                    </a>
                <?php endif ?>

                <?php if (get_field('share_results', 'option')['facebook']): ?>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="btn-share share-facebook" target="_blank"><?php _e('facebook', 'Sensez') ?></a>
                <?php endif ?>

            </div>
        </div>
    </section>
<?php endif ?>

<?php if( have_rows('feedback_results', 'option') ): ?>

    <section class="section res-screen-09 fp-auto-height">
        <div class="elements">
            <div class="el el-01"></div>
            <div class="el el-02"></div>
            <div class="el el-03"></div>
        </div>
        <div class="container">
            <div class="wrapper">

                <?php while( have_rows('feedback_results', 'option') ): the_row(); ?>

                    <div class="col">

                        <?php if ($field = get_sub_field('title')): ?>
                            <h2><?= $field ?></h2>
                        <?php endif ?>

                        <?php if ($field = get_sub_field('text')): ?>
                            <p><?= $field ?> <span class="code">191100F22OC12D45E35F26</span></p>
                        <?php endif ?>
                        
                        <?php if ($field = get_sub_field('link')): ?>
                            <a href="<?= $field['url'] ?>" class="btn btn-<?php the_sub_field('link_color') ?>"<?php if($field['target']) echo ' target="_blank"' ?>>

                                <?php if (get_sub_field('is_link_image')): ?>
                                    <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5 0L21.2717 5.8563L26.3099 1.78256L26.2662 8.26151L32.573 6.77718L29.7225 12.5955L36.0487 13.9946L30.956 18L36.0487 22.0054L29.7225 23.4045L32.573 29.2228L26.2662 27.7385L26.3099 34.2174L21.2717 30.1437L18.5 36L15.7283 30.1437L10.6901 34.2174L10.7338 27.7385L4.42703 29.2228L7.27753 23.4045L0.951298 22.0054L6.044 18L0.951298 13.9946L7.27753 12.5955L4.42703 6.77718L10.7338 8.26151L10.6901 1.78256L15.7283 5.8563L18.5 0Z" fill="#F24EB6" />
                                    </svg>
                                <?php endif ?>
                                
                                <?= $field['title'] ?>
                            </a>
                        <?php endif ?>

                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </section>

<?php endif; ?>

<?php get_template_part('parts/bottom') ?>

</div>

<?php get_footer() ?>