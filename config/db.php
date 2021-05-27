<?php
   /*
   *  Инициализация подключения к БД
   */


   $dblocation = "192.168.1.141";
   $dbname = "petunia";
   $dbuser = "semen";
   $dbpasswd = "268123";

   // Соединяемся с базой данных
   $db = mysqli_connect($dblocation, $dbuser, $dbpasswd);

   if (! $db) {
      echo "Ошибка доступа к MySql";
      exit();
   }

   // Устанавливаем кодировку по умолчанию для текущего соединения
   mysqli_set_charset($db, 'utf8');

   if (! mysqli_select_db($db, $dbname)) {
      echo "Ошибка доступа к базе данных: ($dbname)";
      exit();
   }
?>