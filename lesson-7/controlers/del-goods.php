<?php
session_start();
$id = $_GET['id'];
$_SESSION['cartId'] = array_filter($_SESSION['cartId'],  function($k) {
    if($_SESSION['cartId'][0] == $_GET['id']){
        $_SESSION['cartId'][0] = null;
    }else{
        return $k !== $_GET['id'];
    }
},);

header("location: ../carts.php");