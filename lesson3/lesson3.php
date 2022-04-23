<?php
// дз 1
// $i = 0;
// while ($i<=100){
//     if($i % 3 === 0) echo $i, "<br>";
//     $i++;
// }

// дз 2
// $i=0;
// do{
// if($i===0) {
//     echo "$i – это ноль <br>"; 
// }elseif($i%2 === 0){
//     echo "$i – чётное число. <br>";
// }
// else{
//     echo "$i – нечётное число. <br>";
// }
// $i++;
// }
// while($i<=10);

// дз 3
// $cites=["Московская область"=>["Москва","Зеленоград","Клин"],"Ленинградская область"=>["Санкт-Петербург","Всеволожск","Павловск","Кронштадт"],"Рязанская область"=>["Рязань","Касимов","Сасово","Скопин"]];

// дз 4
// function transkript($str){
//     $text = [
//         "а" => "a", 
// 		"б" => "b", 
// 		"в" => "v", 
// 		"г" => "g", 
// 		"д" => "d", 
// 		"е" => "e", 
// 		"ё" => "yo",
// 		"ж" => "zh", 
// 		"з" => "z", 
// 		"и" => "i", 
// 		"й" => "y", 
// 		"к" => "k", 
// 		"л" => "l", 
// 		"м" => "m",
// 		"н" => "n", 
// 		"о" => "o", 
// 		"п" => "p", 
// 		"р" => "r", 
// 		"с" => "s", 
// 		"т" => "t", 
// 		"у" => "u",
// 		"ф" => "f", 
// 		"х" => "h", 
// 		"ц" => "ts", 
// 		"ч" => "ch", 
// 		"ш" => "sh", 
// 		"щ" => "s'h", 
// 		"ъ" => "",
// 		"ы" => "i", 
// 		"ь" => "'", 
// 		"э" => "e", 
// 		"ю" => "yu", 
// 		"я" => "ya", 
//     ];
//     echo strtr($str, $text);
// }
// transkript("река");

// дз 5
// function replace($str){
//     echo str_replace(" ", "_", $str);
// }

// replace("Привет всем");

//дз 6

// $menu = ['Главная'=>["страница 1" => "https://www.google.ru/", "страница 2" => "https://yandex.ru/"], "о нас" => ['страница 3' => "https://yandex.ru/promo/browser/general/p/16?from=exp_strip_main_neYabro&utm_medium=strip&utm_source=main&banerid=0401004781", 'страница 4' => "https://www.google.com/intl/ru_ru/chrome/"], "форум" => ["страница 5" => "https://4pda.to/forum/index.php?act=idx", "страница 6" => "https://stackoverflow.com/"]];
// $str = "<ul>";
// foreach($menu as $item => $subitem){
//     if(is_array($subitem)){
//         $str .= "<li>$item</li>";
//         $str .= "<ul>";
//         foreach($subitem as $item2 => $subitem2){
//             $str .= "<a href=$subitem2><li>$item2</li></a>";
//         }
//         $str .= "</ul>";
//     }else {
//         $str .= "<a href=$subitem><li>$item</li></a>";
//     }
// }
// $str .= "</ul>";
// echo $str;

