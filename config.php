<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'u_accounts';

$connection = mysqli_connect($server, $user, $pass) or die("error");

$selectdb = mysqli_select_db($connection, $db) or die("error");

?>