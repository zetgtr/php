<?php

const SERVER = "localhost";
const LOGIN = "root";
CONST PAS = "";
CONST DB = "lesson-8";

$connect = mysqli_connect(SERVER, LOGIN, PAS, DB) or die("Ошибка");