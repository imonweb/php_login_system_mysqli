<?php
/* Database connection settings */
$host = 'localhost';
$user = 'imon';
$pass = 'p@ssw0rd';
$db = 'php_clever_techie_login_system';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
