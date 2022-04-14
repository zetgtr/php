<?php
// дз 1
// $a = rand(-100, 100);
// $b = rand(-100, 100);
// echo "a = " . $a;
// echo "<hr>";
// echo "b = " . $b;
// echo "<hr>";
// if($a>=0&&$b>=0){
//    echo $a-$b;
// }elseif ($a<0&&$b<0) {
//    echo $a*$b;
// }elseif ($a < 0 && $b >= 0 || $a >=0 && $b<0) {
//     echo $a + $b;
// }

// дз 2 
// $a = rand(0,15);
// switch($a){
//     case 0:
//         echo $a++;
//         echo "<hr>";
//     case 1:
//         echo $a++;
//         echo "<hr>";
//     case 2:
//         echo $a++;
//         echo "<hr>";
//     case 3:
//         echo $a++;
//         echo "<hr>";
//     case 4:
//         echo $a++;
//         echo "<hr>";
//     case 5:
//         echo $a++;
//         echo "<hr>";
//     case 6:
//         echo $a++;
//         echo "<hr>";
//     case 7:
//         echo $a++;
//         echo "<hr>";
//     case 8:
//         echo $a++;
//         echo "<hr>";
//     case 9:
//         echo $a++;
//         echo "<hr>";
//     case 10:
//         echo $a++;
//         echo "<hr>";
//     case 11:
//         echo $a++;
//         echo "<hr>";
//     case 12:
//         echo $a++;
//         echo "<hr>";
//     case 13:
//         echo $a++;
//         echo "<hr>";
//     case 14:
//         echo $a++;
//         echo "<hr>";
//     case 15:
//         echo $a++;
//         echo "<hr>";
// }

// дз 3
// function sum($a,$b){
//     return $a + $b;
// }
// function subtraction($a,$b){
//     return $a-$b;
// }
// $multiplication = fn($a,$b)=>$a*$b; // решил одну стрелочную сделать для разнобразия)

// function division($a,$b){
//     return ( $b === 0 ) ? "неверное значение для деления" : $a/$b;
// }

// дз 4
// function mathOperation($arg1, $arg2, $operation) {
// 	switch ($operation) {
// 		case "sum": 
// 			return $arg1 + $arg2;
// 		case "subtraction":
// 			return $arg1 - $arg2;
// 		case "multiplication":
// 			return $arg1 * $arg2; 
// 		case "division":
// 			return ( $arg2 === 0 ) ? "неверное значение для деления" : $arg1/$arg2;
// 		}
// 	}

//дз 5 сказали не делать

// дз 6
// function power($val, $pow) {
//     return ($pow == 1) ? $val : $val * power($val, $pow - 1);
// }
// дз 7
function word_variation_rus($chislo, $mnogo, $odin, $dva) {
    $ost_10 = $chislo%10;
    if ($ost_10 == 0 || $ost_10 >= 5 || in_array($chislo%100, range(11,19))) $string_txt = "$chislo $mnogo";
    else {
        if ($ost_10 == 1) $string_txt = "$chislo $odin";
        elseif (in_array($ost_10, range(2,4))) $string_txt = "$chislo $dva";
    }
    return $string_txt;
}

$hour = rand(0, 24);
$minute = rand(0, 59);
echo word_variation_rus($hour, 'часов', 'час', 'часа'), " ",word_variation_rus($minute, 'минут', 'минута', 'минуты');
