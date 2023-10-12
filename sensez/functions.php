<?php

include 'inc/ajax-actions.php'; // ajax
include 'inc/enqueue.php';      // add styles and scripts
include 'inc/acf.php';          // custom acf functions
include 'inc/extras.php';       // custom functions
//include 'classes/class-custom-email.php';       // custom functions
include 'inc/woo.php';

add_theme_support( 'post-thumbnails');
add_theme_support( 'woocommerce');
add_theme_support( 'title-tag' );
add_theme_support('html5');

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu(){
	register_nav_menus( array(
        'main-menu' => 'main',
        'head-menu' => 'header',
        'mob-menu'  => 'mobile',
    )
);
}


add_filter( 'wpcf7_autop_or_not', '__return_false' );


add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}



add_action('wp_ajax_test_4_steps', 'test_4_steps');
add_action('wp_ajax_nopriv_test_4_steps', 'test_4_steps');
function test_4_steps(){

    $number_title = wp_count_posts('result')->publish + 1;

    $post_data = array(
        'post_title'    => 'Result ' . $number_title,
        'post_type'  => 'result',
        'post_status'   => 'draft',
    );

    $post_id = wp_insert_post($post_data);

    //update_field('relation', array($_POST['relation']), $post_id);
    update_field('age', array($_POST['age']), $post_id);
    update_field('gender', array($_POST['gender']), $post_id);
    update_field('orientation', array($_POST['orientation']), $post_id);

    if ((int)$_POST['gender'] == 10 && (int)$_POST['orientation'] == 19)
        $link = get_permalink(400);
    elseif((int)$_POST['gender'] == 11 && (int)$_POST['orientation'] == 19)
        $link = get_permalink(472);
    else
        $link = get_permalink(401);

    echo json_encode(array($post_id, $link));

    die();
}



add_action('wp_ajax_test_questions', 'test_questions');
add_action('wp_ajax_nopriv_test_questions', 'test_questions');
function test_questions(){

    $value = [];
    for ($i = 0; $i < count($_POST['questions']); $i++) {
        $value[] = array(
            "question" => $_POST['questions'][$i],
            "answer" => $_POST['answers'][$i],
        );
    }

    update_field('answers', $value, $_COOKIE['result_id']);

    echo 'https://google.com';

    die();
}



function calc_data_width($data_text){
    return $data_text * 100 / 60;
}



add_action( 'wp_head', 'sensez_head_action' );
function sensez_head_action(){ ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MLJJBQC');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BYN8T2TCJ4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BYN8T2TCJ4');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '294016849863327');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=294016849863327&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <script>
        var arrPreviousPageUrl = document.referrer.split('?')
        if (undefined !== arrPreviousPageUrl[1]) {
            var newUrl = window.location.href + '?' + arrPreviousPageUrl[1]
            history.pushState(null, null,  newUrl)
        }
    </script>
<?php }