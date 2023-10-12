<?php



get_header('empty') ?>

<?php $profile_id = get_field('profile') ;


$profile_txt = get_field('profile_txt') ;



?>

<div class="contact-us">
    <button class="contact-us-close"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-contacts-close.svg" alt="" /></button>
    <span><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-contacts.svg" alt="" /></span>
    <span><?php _e('contact us', 'Sensez') ?></span>
</div>
<div class="page-content" id="fullpage">

    <?php
    switch (get_field('primary', $profile_id)) {
        case 'Mindfulness':
        $color_class = 'blue';
        break;
        case 'Energy':
        $color_class = 'pink';
        break;
        case 'Passion':
        $color_class = 'orange';
        break;

        default:
        $color_class = 'yellow';
        break;
    }
    ?>

    <section class="section screen res-screen-01 res-<?= $color_class ?>" data-bg="#F9F3E9">
        <div class="elements">
            <div class="el el-01"></div>
            <div class="el el-02"></div>
            <div class="el el-03"></div>
            <div class="el el-04"></div>
        </div>
        <div class="wrapper-bg">
            <div class="container">

                <?php if ($field = get_field('logo', 'option')): ?>
                    <div class="logo">
                        <a href="<?= get_home_url() ?>">
                            <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
                        </a>
                    </div>
                <?php endif ?>

                <div class="subtitle"><?php _e('Your primary sexuality strength is', 'Sensez') ?></div>

                <?php if ($field = get_field('primary', $profile_id)): ?>
                    <h1><?= $field ?></h1>
                <?php endif ?>

                <?php if (($field = get_field('percent', $profile_id)) && get_field('payment') && get_field('payment') != 'Demo'): ?>
                <p><?= $field ?></p>
                <?php endif ?>

                <div class="graph">

                    <?php if (get_field('payment') && get_field('payment') != 'Demo'): ?>
                    <?php get_template_part('parts/share', 'result_start') ?>
                    <?php endif ?>

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
                    <?php if (get_field('payment') && get_field('payment') != 'Demo'): ?>
                        <div class="box-share-hidden">
                            <?php get_template_part('parts/share', 'result_start_inner') ?>
                        </div>
                        <a href="#" class="btn btn-outlined">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 7.18561L12.91 0V4.45282C12.5175 4.49498 12.1249 4.54774 11.7325 4.59343C10.7155 4.76679 9.71898 5.04613 8.75892 5.42722C6.82634 6.22049 5.07009 7.39725 3.59343 8.88816C2.13606 10.3398 1.06118 12.1379 0.46705 14.1185C-0.0602951 15.982 -0.142385 17.9459 0.227456 19.8481C0.24467 19.9225 0.302823 19.9802 0.376796 19.996C0.425645 20.0063 0.47659 19.9964 0.518227 19.9689C0.559866 19.9411 0.588944 19.8978 0.598948 19.8481C0.916237 18.1383 1.56175 16.5084 2.49919 15.0505C3.36939 13.7206 4.54461 12.6235 5.92427 11.8533C7.26599 11.1286 8.72473 10.6521 10.2319 10.4465C10.9753 10.3233 11.722 10.2248 12.4794 10.1476L12.9102 10.109L12.91 14.3575L20 7.18561Z" fill="#652FEB" />
                        </svg>
                        <?php _e('Share', 'Sensez') ?>
                        </a>
                    <?php endif ?>

                    <button class="btn-scroll">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="btn-scroll-bg" d="M25 0L27.5192 2.64148L30.563 0.626802L32.4313 3.76262L35.8471 2.47578L36.9707 5.94871L40.5872 5.45421L40.9099 9.0901L44.5458 9.41276L44.0513 13.0293L47.5242 14.1529L46.2374 17.5687L49.3732 19.437L47.3585 22.4808L50 25L47.3585 27.5192L49.3732 30.563L46.2374 32.4313L47.5242 35.8471L44.0513 36.9707L44.5458 40.5872L40.9099 40.9099L40.5872 44.5458L36.9707 44.0513L35.8471 47.5242L32.4313 46.2374L30.563 49.3732L27.5192 47.3585L25 50L22.4808 47.3585L19.437 49.3732L17.5687 46.2374L14.1529 47.5242L13.0293 44.0513L9.41276 44.5458L9.0901 40.9099L5.45421 40.5872L5.94871 36.9707L2.47578 35.8471L3.76262 32.4313L0.626802 30.563L2.64148 27.5192L0 25L2.64148 22.4808L0.626802 19.437L3.76262 17.5687L2.47578 14.1529L5.94871 13.0293L5.45421 9.41276L9.0901 9.0901L9.41276 5.45421L13.0293 5.94871L14.1529 2.47578L17.5687 3.76262L19.437 0.626802L22.4808 2.64148L25 0Z" fill="#652FEB" />
                        <path class="btn-scroll-arrow" d="M24.2859 36.8454C24.6726 37.2398 25.3057 37.2461 25.7001 36.8595L32.1268 30.5589C32.5212 30.1723 32.5274 29.5391 32.1408 29.1447C31.7542 28.7504 31.121 28.7441 30.7267 29.1307L25.014 34.7312L19.4135 29.0186C19.0269 28.6242 18.3937 28.618 17.9994 29.0046C17.605 29.3912 17.5987 30.0244 17.9853 30.4187L24.2859 36.8454ZM26 36.1553L26.2294 13.0099L24.2295 12.9901L24 36.1355L26 36.1553Z" fill="#fff" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="container-text">
                <div class="block-inner block-first">
                    <div class="wrapper">
                            <!-- <div class="image">
                                <picture>

                                    <?php if ($field = get_field('img_description', $profile_id)): ?>
                                    <source media="(min-width: 768px)" srcset="<?= $field['url'] ?>" />
                                    <?php endif ?>

                                    <?php if ($field = get_field('img_description_mobile', $profile_id)): ?>
                                        <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
                                    <?php endif ?>

                                </picture>
                            </div> -->

                            <?php if ($field = get_field('description', $profile_id)): ?>
                                <div class="text"><?= $field ?></div>
                            <?php endif ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section screen res-screen-02" data-bg="#949AF6">
        <div class="container">
            <div class="block-scales">
                <h2><?php _e('Your resource distribution chart', 'Sensez') ?></h2>

                <?php
                $scales_json =   get_field('calc');
                $scales = is_array($scales_json) ? $scales_json : json_decode($scales_json, 1)
                ?>

                <div class="wrapper">
                    <div class="item">
                        <p><?php _e('Your energy level', 'Sensez') ?></p>
                        <div class="scale color-pink">
                            <div class="scale-title"><span class="counter" data-text="<?= $scales['Д'] ?>">0</span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                            <div class="bar-inner" data-width="<?= calc_data_width($scales['Д']) ?>"></div>
                            <div class="bar-text-start">01</div>
                            <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p><?php _e('Your sexuality level', 'Sensez') ?></p>
                        <div class="scale color-orange">
                            <div class="scale-title"><span class="counter" data-text="<?= $scales['Ю'] ?>">0</span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                                <div class="bar-inner" data-width="<?= calc_data_width($scales['Ю']) ?>"></div>
                                <div class="bar-text-start">01</div>
                                <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p><?php _e('Your self-regulation level', 'Sensez') ?></p>
                        <div class="scale color-yellow">
                            <div class="scale-title"><span class="counter" data-text="<?= $scales['В'] ?>">0</span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                                <div class="bar-inner" data-width="<?= calc_data_width($scales['В']) ?>"></div>
                                <div class="bar-text-start">01</div>
                                <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p><?php _e('Your mindfulness level', 'Sensez') ?></p>
                        <div class="scale color-blue">
                            <div class="scale-title"><span class="counter" data-text="<?= $scales['З'] ?>">0</span><span class="divider">/</span><small>60</small></div>
                            <div class="bar">
                                <div class="bar-inner" data-width="<?= calc_data_width($scales['З']) ?>"></div>
                                <div class="bar-text-start">01</div>
                                <div class="bar-text-end">60</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php if (!get_field('payment') || get_field('payment') == 'Demo'): ?>

<?php get_template_part('parts/learn_more_demo', 'result') ?>

<?php get_template_part('parts/payment_demo', 'result') ?>

<?php get_template_part('parts/reviews_demo', 'result') ?>

<?php get_template_part('parts/methodology_demo', 'result') ?>

<?php get_template_part('parts/gift', 'result') ?>

<?php endif ?>

<?php if(have_rows('texts_basic', $profile_id) && get_field('payment') && get_field('payment') != 'Demo' ): ?>

<section class="section screen res-screen-02 res-screen-scroll-container<?php if(get_field('payment') == 'Advanced') echo ' res-screen-02--advanced' ?>" data-bg="#949AF6">
  <div class="container">

    <?php while( have_rows('texts_basic', $profile_id) ): the_row(); ?>

        <div class="block-inner<?php if(get_row_index() > 1) echo ' block-scroll' ?><?php if(get_row_index() % 2 == 0) echo ' img-right'; if(get_sub_field('is_bottom_element')) echo ' block-inner--has-element' ?>">
            <div class="wrapper">

                <?php if ($field = get_sub_field('image')): ?>
                    <div class="image">
                        <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
                    </div>
                <?php endif ?>

                <div class="text">

                    <?php if ($field = get_sub_field('title')): ?>
                        <h3><?= $field ?></h3>
                    <?php endif ?>

                    <?php if ($field = get_sub_field('image_mobile')): ?>
                        <div class="image-mobile">
                            <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
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

<?php if (get_field('payment') == 'Basic'): ?>

    <?php get_template_part('parts/learn_more_basic', 'result') ?>

<?php endif ?>

</div>
</section>
<?php endif; ?>

<?php if(have_rows('texts_basic', $profile_id) && get_field('payment') == 'Advanced'): ?>
<section class="section screen res-screen-02" data-bg="#FDAB96">
  <div class="container">

    <?php if( have_rows('texts_advanced', $profile_id) ): ?>
        <?php while( have_rows('texts_advanced', $profile_id) ): the_row(); ?>

            <div class="block-scroll block-inner<?php if(get_row_index() % 2 == 1) echo ' img-right'; if(get_sub_field('is_bottom_element')) echo ' block-inner--has-element' ?>">
                <div class="wrapper">

                    <?php if ($field = get_sub_field('image')): ?>
                        <div class="image">
                            <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
                        </div>
                    <?php endif ?>

                    <div class="text">

                        <?php if ($field = get_sub_field('title')): ?>
                            <h3><?= $field ?></h3>
                        <?php endif ?>

                        <?php if ($field = get_sub_field('image_mobile')): ?>
                            <div class="image-mobile">
                                <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
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

<?php if(have_rows('two_columns_advanced', $profile_id)): ?>

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
<?php endif; ?>

<?php if(have_rows('recommendations', $profile_id) && get_field('payment') == 'Advanced'): ?>

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
                                <?= wp_get_attachment_image($field['ID'], 'full', false, array('loading' => 'eager')) ?>
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

<?php if (get_field('payment') == 'Basic'): ?>

    <?php get_template_part('parts/payment_basic', 'result') ?>

<?php endif ?>

<?php if (get_field('payment') && get_field('payment') != 'Demo'): ?>

<?php get_template_part('parts/gift', 'result') ?>

<?php get_template_part('parts/share', 'result') ?>

<?php get_template_part('parts/feedback', 'result') ?>

<?php endif ?>

<?php get_template_part('parts/bottom') ?>

</div>

<?php get_footer('empty') ?>
