<?php

define("HOSTNAME","localhost");
define("DATABASE","upcard");
define("PASSWORD","");
define("USER","root");
define("KEYSITE","@Upcard202123456");

$conn = new PDO("mysql:dbname=".DATABASE.";host=".HOSTNAME."", USER, PASSWORD);
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

session_start();

?>