<?php
   /*
   *  Инициализация подключения к БД
   */

	$host = '192.168.1.141';
	$db   = 'petunia';
	$user = 'semen';
	$pass = '268123';
	$charset = 'utf8';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


	$pdo = new PDO($dsn, $user, $pass);

?>
