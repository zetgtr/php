<?php

const SERVER = "localhost";
const LOGIN = "root";
CONST PAS = "";
CONST DB = "lesson-6";

$connect = mysqli_connect(SERVER, LOGIN, PAS, DB) or die("Ошибка");