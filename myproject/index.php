<?php
//1 задача
/*$languages = array
('html',
'css',
'php',
'js',
'jq');

foreach ($languages as $l) {
    echo $l . '<br>';
}
//2 задача
*/
/*$sum = 0;
$numbers = array(1,20,15,17,24,35);
foreach ($numbers as $result) {
    $sum += $result;
}

    echo $sum;
*/
//3 задача
/*
$sum = 0;
$arr = array (26, 17, 136, 12, 79, 15);
foreach ($arr as $val);
$i = 0;
while ($i >= count($arr)) {
    $val = $arr{$i};
    $sum += $val * $val;
    $i++;
}
echo $sum;
*/
//4 задача
/*
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $val) {
    echo "Ключ {$key}<br>";
}
foreach ($arr as $val){
    echo "Элемент {$val} <br>";
}
*/
// 5 задача
/*
$arr= array ('Коля' => 200,'Вася' => 300,'Петя' => 400);
    foreach ($arr as $key => $val){
    echo "{$key} - зарплата {$val} долларов <br>";
}
*/
// 6 задача
/*
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');
foreach ($arr as $key => $val){
    $en[] = $key;
    $ru[] = $val;
}
echo "<pre>";
$en = array_keys($arr);
$ru = array_values($arr);
print_r($ru);
print_r($en);
*/
//7 задача
/* $arr = array (2, 5, 9, 15, 0, 4);
foreach ($arr as $number) {
    if ($number > 3 && $number < 10) {
        echo $number;
    }
}
*/
// 8 задача
/*
$arr = array(1,2,3,4,5,6,7,8,9);
$str = '-';

foreach($arr as $val){
    $str .= $val . '-';
}
echo $str;
*/
// 9 задача
/*
echo "<pre>";
for ($i = 1; $i <= 100; $i++){
    echo $i . PHP_EOL;
}
*/
//10 задача
/*echo "<pre>";
for ($i = 11; $i <= 33; $i++) {
    echo $i . PHP_EOL;
}
*/
// 11 задача
/*echo "<pre>";

for ($i = 0; $i <= 100; $i++){
    if ( !($i%2) ){
        echo $i . PHP_EOL;
    }
}
*/
// 12 задача
/*
echo "<pre>";

$div = $n = 1000;
$num = 0;
do {
    $num++;
    echo "{$div} ".PHP_EOL;
    $div = $div / 2;
} while ($div >= 50);

echo "Кол-во итераций {$num}";
*/
// 13 задача
/*
$arr = array (4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $numb) {
    if ($numb > 3 && $numb < 10) ;
    {
        echo $numb;
    }
}
*/
// 14 задача
/*
$arr = array(4,2,5,19,13,0,10);
// То, что мы ищем
$search = array(2,3,4); //
// Есть или нет?
$flag = 0;

foreach($arr as $val){
    if ( in_array($val, $search) ){
        $flag = 1;
        break;
    }
}

echo $flag ? 'Есть' : 'Нету';
*/
// 15 задача
/*
$arr = array(3,4,5);
$count = 0;

foreach ($arr as $item) {
    $count++;
}

echo "Кол-во: {$count}";
*/
// 16 задача
/*
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$i = 0;
foreach($arr as $val){
    echo $val . ' ';
    $i++;
    if ( $i == 3 ){
        echo "<br>";
        $i = 0;
    }
}
*/
// 17 задача
/*
echo "<pre>";

$arr = array(
    'Jan',
    'Feb',
    'Mar',
    'May',
    'Jun',);

$month = 'Feb';
foreach ($arr as $item) {
    echo $item == $month ? '<b>'.$item.'</b>' : $item;
    echo PHP_EOL;
}
*/
// 18 задача
/*
echo "<pre>";
$arr = array(
    'Пн',
    'Вт',
    'Ср',
    'Чт',
    'Пт',
    'Cб',
    'Вс'
);

$holidays = array('Сб', 'Вс');

foreach ($arr as $item) {
    echo in_array($item, $holidays) ? '<b>'.$item.'</b>' : $item;
    echo PHP_EOL;
}
*/
//19 задача
/*
echo "<pre>";

$arr = array(
    'Mon',
    'Tue',
    'Wed',
    'Thr',
    'Fri',
    'Sat',
    'Sun',
);

$day  = ('Fri');

foreach ($arr as $item) {
    echo $item == $day ? '<i>'.$item.'</i>' : $item;
    echo PHP_EOL;
}
*/
// 20 задача
/*
echo "<pre>";
for($i = 1; $i<=20; $i++){
    echo $i;

    for($x = 0; $x < $i; $x++){
        echo '*';
    }

    echo PHP_EOL;
}
*/
//21 задача
/*
echo "<pre>";
for($i = 1; $i<=9; $i++){

    for($x = 0; $x < $i; $x++){
        echo $i;
    }

    echo PHP_EOL;
}
*/
// 22 задача
/*
echo "<pre>";
$str = '';
for($i = 1; $i<=10; $i++){
    echo $i;

    $str .= '**';
    echo $str;

    echo PHP_EOL;
}
*/

//23 задача

































