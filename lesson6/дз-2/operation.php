<?php
function mathOperation($x, $y, $operation) {
    	switch ($operation) {
    		case "+": 
    			return $x + $y;
    		case "-":
    			return $x - $y;
    		case "*":
    			return $x * $y; 
    		case "/":
    			return ( $y === 0 ) ? "неверное значение для деления" : $x/$y;
    		}
    	}
$x = $_POST['x'];
$operation = $_POST["operation"];
$y = $_POST["y"];

print_r($_POST);
$res = mathOperation($x, $y, $operation);

header("location: index.php?res=$res");