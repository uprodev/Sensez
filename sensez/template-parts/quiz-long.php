

<?php

$page = $args['page'];

$row  = $page - 1;

switch ($page) {
    case 1:
    $color = 'orange';
    break;
    case 3:
    $color = 'lightblue';
    break;
    case 5:
    $color = 'pink';
    break;
    case 7:
    $color = 'blue';
    break;
    case 9:
    $color = 'lightorange';
    break;

    default:
    break;
}



if (!empty($_COOKIE['an'])) {
    $answers = json_decode(stripslashes($_COOKIE['an']), 1);
}

?>


<div class="step-main-wrapper color-<?= $color ?>">
    <div class="test-progress">
        <div class="steps">

            <?php
            for ($i = 1; $i <= 6; $i++) { ?>
                <span class="step <?= ($page/2) >= $i ? 'active': ''  ?>">
                   <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 0L19.1265 4.33162L24 2.14359L24.5419 7.45815L29.8564 8L27.6684 12.8735L32 16L27.6684 19.1265L29.8564 24L24.5419 24.5419L24 29.8564L19.1265 27.6684L16 32L12.8735 27.6684L8 29.8564L7.45815 24.5419L2.14359 24L4.33162 19.1265L0 16L4.33162 12.8735L2.14359 8L7.45815 7.45815L8 2.14359L12.8735 4.33162L16 0Z" fill="white" />
                  </svg>
              </span>
          <?php }
          ?>

          <div class="steps-progress"><div class="inner" data-percent="<?= ($page/10)*100  ?>" ></div></div>
      </div>

      <?php


      $prev = ($page - 1) <= 0 ? get_permalink(324) . '?prev=true' : get_permalink(). ($page - 1);  ?>

      <a href="<?= $prev ?>" class="btn-previous btn-previous-active">
        <svg width="38" height="15" viewBox="0 0 38 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M37 11.7705C30.3354 7.70205 17.857 4.45488 1 10.0833M10.6542 0.464844C9.87826 2.53492 7.33556 7.20864 3.372 9.34295M3.4043 9.27846C5.58829 9.41773 10.6808 10.65 13.5787 14.4648" stroke="white" />
        </svg>
        <?php _e('previous', 'Sensez') ?>
    </a>


    <a href="<?php the_permalink() ?><?= $page+1 ?>" class="btn-next"></a>


    <?php if ($page != 10): ?>
        <a href="<?php the_permalink() ?><?= $page+1 ?>" class="btn-next"></a>
    <?php endif ?>


</div>
<!-- start content-->

<?php

if($page == 1 || $page == 2) $data_step = 2;
if($page == 3 || $page == 4) $data_step = 3;
if($page == 5 || $page == 6) $data_step = 4;
if($page == 7 || $page == 8) $data_step = 5;
if($page == 9 || $page == 10) $data_step = 6;

?>

<div class="page-content">
    <section class="test-step test-step--type1" data-step="<?= $data_step ?>">
        <div class="test-final">
            <svg width="3557" height="5007" viewBox="0 0 3557 5007" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1442.53 7.5014C1431.33 14.6854 1431.17 31.5297 1441.55 113.96C1459.06 253.119 1449.51 437.682 1418.51 558.989C1350.07 826.843 1214.46 1033.58 832.703 1452.11C535.905 1777.49 449.549 1883.48 330.305 2068.72C-54.0187 2665.73 -107.333 3426.91 193.333 4024.23C541.831 4716.58 1297.35 5107.02 2052.04 4984.76C2647.02 4888.39 3166.7 4472.26 3410.82 3896.74C3508.2 3667.18 3547.35 3490.16 3555.75 3241.51C3568.11 2875.54 3488.62 2521.32 3320.05 2191.07C3257.96 2069.43 3148.91 1902.08 3125.83 1893.02C3092.85 1880.06 3084.74 1898.12 3084.74 1984.52C3084.74 2137.35 3040.69 2246.62 2942.15 2338.2C2766.12 2501.82 2515.61 2491.03 2350.87 2312.74C2223.7 2175.1 2208.39 2073 2266.57 1750.63C2285.52 1645.66 2303.75 1528.94 2307.09 1491.26C2314.44 1408.27 2298.03 1219.87 2272.97 1099.76C2185.04 678.122 1926.07 311.639 1516.94 29.8267C1468.08 -3.82274 1462.71 -5.43769 1442.53 7.5014ZM1575.23 2482.24C1580.58 2492.52 1580.83 2552.21 1575.86 2631.5C1567.28 2768.52 1577.53 2981.16 1596.31 3055.56C1615.26 3130.7 1647.09 3203.51 1689.99 3269.89C1868.63 3546.34 2255.61 3604.17 2518.07 3393.63C2544.02 3372.81 2571.1 3355.78 2578.27 3355.78C2610.34 3355.78 2651.7 3477.68 2668.79 3622.63C2701.4 3899.11 2598.46 4175.88 2387.43 4379.13C2008.49 4744.13 1404.87 4698.76 1078.77 4280.79C930.408 4090.63 867.427 3862.94 890.077 3598.71C916.014 3296.21 1007.44 3077.57 1222.27 2804.23C1318.39 2681.94 1527.94 2464.89 1549.76 2465.02C1558.87 2465.07 1570.34 2472.82 1575.23 2482.24Z"
                fill="#F9F3E9"
                />
            </svg>
        </div>

        <?php if( have_rows('test_answers', 'option') ): ?>

            <div class="test-options">
                <form action="#" id="testChoices">
                    <ul>

                        <?php while( have_rows('test_answers', 'option') ): the_row(); ?>

                            <?php if ($field = get_sub_field('text')): ?>
                                <li>
                                    <label>
                                        <input type="radio" name="test" value="<?= get_row_index() - 1 ?>" />
                                        <span>
                                            <figure>
                                               <lottie-player class="hover" src="<?= get_stylesheet_directory_uri() ?>/lottie/hover.json" style="width: 100%; height: auto"></lottie-player>
                                               <lottie-player class="click" src="<?= get_stylesheet_directory_uri() ?>/lottie/click.json" style="width: 100%; height: auto"></lottie-player>

                                               <?php if (get_row_index() == count(get_field('test_answers', 'option'))): ?>
                                               <svg width="50" height="69" viewBox="0 0 50 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2774 0.103375C20.1199 0.202376 20.1177 0.434502 20.2635 1.57045C20.5097 3.48816 20.3755 6.03157 19.9397 7.70326C18.9776 11.3945 17.0713 14.2435 11.7051 20.0111C7.5331 24.4951 6.31921 25.9557 4.64303 28.5084C-0.75933 36.7357 -1.50875 47.2252 2.71764 55.4567C7.6164 64.9978 18.2366 70.3783 28.8451 68.6936C37.2086 67.3654 44.5137 61.6309 47.9452 53.6998C49.314 50.5363 49.8644 48.0969 49.9825 44.6703C50.1561 39.6269 49.0389 34.7455 46.6693 30.1944C45.7964 28.5182 44.2636 26.212 43.9391 26.0871C43.4756 25.9085 43.3616 26.1574 43.3616 27.3481C43.3616 29.4542 42.7424 30.96 41.3573 32.2221C38.8827 34.4768 35.3613 34.3282 33.0457 31.8713C31.2581 29.9744 31.0428 28.5674 31.8607 24.1249C32.1271 22.6783 32.3833 21.0699 32.4302 20.5506C32.5336 19.407 32.3029 16.8107 31.9507 15.1554C30.7146 9.345 27.0743 4.2946 21.3233 0.411033C20.6365 -0.0526802 20.561 -0.0749352 20.2774 0.103375ZM22.1427 34.2071C22.2178 34.3487 22.2214 35.1712 22.1515 36.264C22.031 38.1522 22.175 41.0825 22.4389 42.1077C22.7054 43.1432 23.1527 44.1466 23.7558 45.0615C26.2669 48.8711 31.7066 49.668 35.396 46.7666C35.7607 46.4797 36.1415 46.245 36.2422 46.245C36.693 46.245 37.2744 47.9249 37.5146 49.9224C37.973 53.7325 36.526 57.5465 33.5596 60.3475C28.2329 65.3774 19.7479 64.7523 15.164 58.9923C13.0786 56.3717 12.1932 53.234 12.5116 49.5927C12.8762 45.4241 14.1613 42.4111 17.1811 38.6443C18.5323 36.959 21.4779 33.9679 21.7846 33.9697C21.9128 33.9704 22.0739 34.0772 22.1427 34.2071Z"
                                                  fill="white"
                                                  />
                                              </svg>
                                          <?php endif ?>

                                      </figure>
                                      <?= $field ?>
                                  </span>
                              </label>
                          </li>
                      <?php endif ?>

                  <?php endwhile; ?>


              </ul>
          </form>
      </div>
  <?php endif; ?>

  <div class="test-step-inner">
    <div class="elements">

        <?php
        for ($i = 2; $i <= 13; $i++) { ?>
            <div class="el el-<?php if($i < 10) echo '0' ?><?= $i ?>">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/star.svg" alt="" />
            </div>
        <?php }
        ?>

    </div>

    <?php
    $featured_posts = get_field('pages')[$row]['questions'];
    if($featured_posts): ?>

        <form action="<?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?>" method="POST" id="test_questions" class="container">
            <div class="test-scroller">
                <ul>

                    <?php foreach($featured_posts as $index => $post):

                        setup_postdata($post);
                        $post_id = $post->ID ?>
                        <li>

                            <input type="hidden" value="<?= isset($answers["p$page-$post_id"]) ? $answers["p$page-$post_id"] :'' ?>"  data-id="<?= $post->ID ?>" name="questions[<?= $post->ID ?>]" readonly />


                            <h3><?php the_title() ?></h3>
                        </li>
                    <?php endforeach; ?>

                    <?php wp_reset_postdata(); ?>

                </ul>
            </div>
            <input type="hidden" name="action" value="test_questions">
        </form>

    <?php endif; ?>

</div>
</section>
</div>

<!-- end content-->
</div>
