<?php
function getAll($link, $table){
    $query = "SELECT * FROM {$table}";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $res = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }
    return $res;
}


function newUser($link, $login, $pass, $sessionId){

    $t = "INSERT INTO users (login, pass, session) VALUES ('%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $login),mysqli_real_escape_string($link, $pass),mysqli_real_escape_string($link, $sessionId));
	
    $result = mysqli_query($link, $query);

    if(!$result){
        die(mysqli_error($link));
    }

    return true;
}

function newId($link, $sessionId, $login){

	$query = "UPDATE `users` SET `session` = '$sessionId' WHERE `users`.`login` = '$login'";

    mysqli_query($link, $query);
}

function auth($link, $sessionId){
    
    $query = "SELECT * FROM `users` WHERE `users`.`session` = '$sessionId'";

    $result = mysqli_query($link, $query);
    if(!$result)
    	die(mysqli_error($link));

 	$n = mysqli_num_rows($result);
 	$res = array();

 	for($i = 0; $i < $n; $i++){
    	 $row = mysqli_fetch_assoc($result);
    	 $res[] = $row;
 	}
 	return $res;
}

function authOff($link, $sessionId){

    $query = "UPDATE `users` SET `session` = 0 WHERE `users`.`session` = '$sessionId'";
    
    mysqli_query($link, $query);
}

function getCart($link, $id){

    $query = "SELECT * FROM `goods` WHERE `goods`.`id` = $id";

    $result = mysqli_query($link, $query);

     if(!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $res = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }
    return $res;
}