<?php
session_start();
$id = $_POST['id'];
if ($_SESSION['cartId']) {
    foreach($_SESSION['cartId'] as $item){
        if($item===$id){
            $basket = true;
        }
    }
    if(!$basket){
        array_push($_SESSION['cartId'], $id);
    }
} else {
    $_SESSION['cartId'] = [0 => $id];
}
header("location: ../index.php");