<?php

const SERVER = "localhost";
const LOGIN = "root";
CONST PAS = "";
CONST DB = "lesson-5";

$connect = mysqli_connect(SERVER, LOGIN, PAS, DB) or die("Ошибка");