<?php
session_start();
$id = $_GET['id'];
if($_SESSION['cartId']){
    array_push($_SESSION['cartId'],$id);
}else{
    $_SESSION['cartId'] = [0=>$id];
}
header("location: ../index.php");