<?php



$post_id = get_the_id();



//$art = new WP_Query([
//	'post_type' => 'question',
//	'posts_per_page' => -1,
//
//]);
//$result = [];
//
//while ($art->have_posts()) {
//    $art->the_post();
//    $result[] = [
//        'question' => get_the_id(),
//        'answer' => rand(0,4)
//    ];
//}
//
//update_field('answers', $result, $post_id)

$answers = get_field('answers', $post_id);

$calc = [];
foreach ($answers as $answer) {
    $cat = get_the_terms($answer['question']->ID, 'question_cat')[0];
    $cat_name = $cat->name;
    $cat_parent = get_term($cat->parent);
    $cat_parent_name = $cat_parent->name;
    $calc_array[$cat_parent_name][$cat_name] += $answer['answer'];
    $calc[$cat_parent_name] += $answer['answer'];
    $calc_ext[$cat_parent_name . $cat_name] += $answer['answer'];
}



echo '<pre>';


$plus = [
    'Д' => 0.1,
    'Ю' => 0.2,
    'В' => 0.3,
    'З' => 0.4
];

$initial = $calc;
foreach ($calc as $key => $cat) {
    $calc[$key] = $cat + $plus[$key];
}

arsort($calc);
$profile = implode('', array_keys($calc));
print_r($calc);

print_r($calc_ext);
print_r($profile);

$DDMMYY = get_the_date('Ymd',$post_id);

$X = get_field('code', 'term_'. get_field('gender'));
$YY = get_term(  get_field('age'))->name;
$Z = get_field('code', 'term_'.  get_field('orientation'));

$CAA = $initial['Д'];
$DBB = $initial['Ю'];
$ECC = $initial['В'];
$FDD = $initial['З'];

$code = "$DDMMYY$X$YY$Z$CAA$DBB$ECC$FDD";
echo '<br>';
echo $code;


//Вид кода: DDMMYYXYYZСAADBBECCFDD, где
//DDMMYY - день, месяц, год прохождения теста
//X - гендер M/F/O - данные собираются с 3го уникального вопроса
//YY - возраст 18-99 - данные собираются с 2го уникального вопроса
//Z - ориентация S/O - данные собираются с 4го уникального вопроса
//CAA - childhood AA (сумма значения Д)
//DBB - youth BB (сумма значения Ю)
//ECC - adult CC (сумма значения В)
//FDD - maturity DD (сумма значения З)
die();
?>

<?php

get_footer();

?>
