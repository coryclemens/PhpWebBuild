<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'system';

$connection = mysqli_connect($server,$user,$pass) or die("error");

$selectdb = mysqli_select_db($connection, $db) or die("error");


?>